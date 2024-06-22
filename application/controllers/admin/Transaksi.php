<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        login("Admin");
    }
    public function index()
    {
        $data['title'] = "Data Transaksi";
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON a.id_paket = c.id_paket LEFT JOIN rekening_pembayaran d ON a.id_rekening = d.id_rekening ORDER BY a.id_rental DESC")->result();
        admin('transaksi/index', $data);
    }

    public function detail($id)
    {
        $this->form_validation->set_rules('aksi', '', 'trim');


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Detail Data Transaksi";
            $data['detail'] = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON a.id_paket = c.id_paket LEFT JOIN rekening_pembayaran d ON a.id_rekening = d.id_rekening WHERE a.id_rental = '$id'")->row_array();
            admin('transaksi/detail', $data);
        } else {
        }
    }

    public function aksi($id)
    {
        $aksi = $this->input->post('status_rental');
        $detail = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON a.id_paket = c.id_paket LEFT JOIN rekening_pembayaran d ON a.id_rekening = d.id_rekening WHERE a.id_rental = '$id'")->row_array();
        if ($aksi == 0) {
            $data['status_rental'] = 0;
        } elseif ($aksi == 1) {
            if ($detail['status'] != 1) {
                $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gagal Karena Motor Tidak Tersedia atau Sedang dirental.\',false)"');
                redirect(base_url('admin/transaksi'));
            } else {
                $data['tanggal_pengambilan'] = $this->input->post('tanggal_pengambilan');
                $data['tanggal_pengembalian'] = $this->input->post('tanggal_pengembalian');
                $data['status_rental'] = 1;
                $this->db->query("UPDATE motor SET status='3' WHERE id_motor='$detail[id_motor]'");
            }
        } elseif ($aksi == 2) {
            $data['status_rental'] = 2;
        } elseif ($aksi == 3) {
            date_default_timezone_set("Asia/Jakarta");

            // Data waktu sewa dan pengembalian
            $waktu_sewa = $detail['tanggal_pengambilan'];
            $waktu_pengembalian = $detail['tanggal_kembali'] . " " . $detail['jam_pengambilan'];
            $waktu_dikembalikan = date("d-m-Y H:i:s");

            $tanggal_sewa_unix = strtotime($waktu_sewa);
            $tanggal_kembali_unix = strtotime($waktu_pengembalian);
            $tanggal_sekarang_unix = strtotime($waktu_dikembalikan);

            if ($tanggal_sekarang_unix > $tanggal_kembali_unix) {
                $selisih_hari = floor(($tanggal_sekarang_unix - $tanggal_kembali_unix) / (60 * 60 * 24)) + 1;
                $denda = $selisih_hari * $detail['denda'];

                $data['waktu_dikembalikan'] = $waktu_dikembalikan;
                $data['total_denda'] = $denda;
                $data['terlambat'] = $selisih_hari;
                $data['status_rental'] = 3;
            } else {
                $data['status_rental'] = 3;
                $data['waktu_dikembalikan'] = $waktu_dikembalikan;
            }
            $this->db->query("UPDATE motor SET status='1' WHERE id_motor='$detail[id_motor]'");
        }

        $this->db->where('id_rental', $id);
        $this->db->update('transaksi', $data);
        $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Transaksi di edit.\',false)"');
        redirect(base_url('') . 'admin/transaksi');
    }

    public function delete($id)
    {
        $this->db->where('id_rental', $id);
        $this->db->delete('transaksi');
        $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Transaksi di hapus.\',false)"');
        redirect(base_url('') . 'admin/transaksi');
    }
}

/* End of file Transaksi.php */
