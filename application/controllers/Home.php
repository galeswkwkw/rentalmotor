<?php
require FCPATH . 'vendor/autoload.php';

use Dompdf\Dompdf;

class Home extends CI_Controller // Tambahkan CI_Controller di sini
{
    public function index()
    {
        $data['galeri'] = $this->db->get('galeri')->result();
        $this->load->model('rental_model');
        $data['motor'] = $this->rental_model->get_data('motor')->result();
        $data['diskon'] = $this->db->get('diskon', 1)->row_array();
        
        homepage('index', $data);
    }

    public function sewa($id)
    {
        $this->form_validation->set_rules('nama_pelanggan', '', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->model('rental_model');
            $data['detail'] = $this->db->get_where('motor', ['id_motor' => $id])->row_array();
            $data['paket_sewa'] = $this->rental_model->get_data('paket_sewa')->result();
            homepage('sewa', $data);
        } else {
            $timestamp_sewa = strtotime($this->input->post('tanggal_rental'));
            $timestamp_kembali = strtotime($this->input->post('tanggal_kembali'));

            if ($timestamp_kembali < $timestamp_sewa) {
                $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gagal Sewa, Tanggal kembali nilainya tidak boleh lebih kecil dari tanggal sewa.\',false)"');
                redirect(base_url('') . 'sewa/' . $id);
            } else {
                $data['nama_pelanggan'] = $this->input->post('nama_pelanggan');
                $data['nik'] = $this->input->post('nik');
                $data['no_telepon'] = $this->input->post('no_telepon');
                $data['id_paket'] = $this->input->post('id_paket');
                $data['total_diskon'] = $this->input->post('diskon');
                $data['id_motor'] = $id;
                $data['tanggal_rental'] = $this->input->post('tanggal_rental');
                $data['jam_pengambilan'] = $this->input->post('jam_pengambilan');
                $data['tanggal_kembali'] = $this->input->post('tanggal_kembali');

                $jenis_pembayaran = $this->input->post('jenis_pembayaran');
                if ($jenis_pembayaran == 'Transfer') {
                    $data['id_rekening'] = $this->input->post('bank');

                    $config['upload_path'] = './assets/img/transaksi/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
                    $config['max_size']  = '99999';
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('bukti')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Error, ' . $error . '.\',false)"');
                        redirect(base_url('home/sewa/') . $id);
                    } else {
                        $data['bukti_pembayaran'] = $this->upload->data('file_name');
                    }
                }
                $config['upload_path'] = './assets/img/transaksi/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
                $config['max_size']  = '99999';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto_sim')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Error, ' . $error . '.\',false)"');
                    redirect(base_url('home/sewa/') . $id);
                } else {
                    $data['foto_sim'] = $this->upload->data('file_name');
                }

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('ktp')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Error, ' . $error . '.\',false)"');
                    redirect(base_url('home/sewa/') . $id);
                } else {
                    $data['ktp'] = $this->upload->data('file_name');
                }

                $transaction_id = $this->db->insert('transaksi', $data);
                // $this->db->query("UPDATE motor SET status='3' WHERE id_motor='$data[id_motor]'");
                $this->export_to_pdf($data);
            }
        }
    }

    public function export_to_pdf($data)
    {
        $data['rental'] = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON c.id_paket = a.id_paket WHERE a.nama_pelanggan = '$data[nama_pelanggan]' AND a.nik = '$data[nik]' AND a.no_telepon = '$data[no_telepon]' AND a.id_paket = '$data[id_paket]' AND a.total_diskon = '$data[total_diskon]' AND a.id_motor = '$data[id_motor]' AND  a.jam_pengambilan = '$data[jam_pengambilan]' AND a.tanggal_kembali = '$data[tanggal_kembali]'")->row_array();
        if (!$data['rental']) {
            show_error('Data Rental tidak ditemukan!');
            return;
        }

        $dompdf = new Dompdf();
        $dompdf->set_option('isHtml5ParserEnabled', true);
        $dompdf->set_option('isRemoteEnabled', true);

        $html = $this->load->view('transaction_pdf', $data, true);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("rental_{$data['nama_pelanggan']}.pdf", array("Attachment" => true));
    }

    public function rental($id)
    {
        $data['rental'] = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON c.id_paket = a.id_paket")->row_array();
        $this->load->view('transaction_pdf', $data, FALSE);
    }

    public function profil()
    {
        $data['title'] = 'Profil';
        homepage('profil', $data);
    }

    public function prosedur()
    {
        $data['title'] = 'Profil';
        homepage('prosedur', $data);
    }

    public function sk()
    {
        $data['title'] = 'Profil';
        homepage('sk', $data);
    }

    public function kontak()
    {
        $data['title'] = 'Profil';
        homepage('kontak', $data);
    }

    public function galeri()
    {
        $data['title'] = 'Profil';
        homepage('galeri', $data);
    }
}
