<?php
require FCPATH . 'vendor/autoload.php';

use Dompdf\Dompdf;

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        login("Admin");
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        admin('laporan', $data);
    }

    public function export()
    {
        $timestamp_sewa = strtotime($this->input->post('dari_tanggal'));
        $timestamp_kembali = strtotime($this->input->post('sampai_tanggal'));

        if ($timestamp_kembali < $timestamp_sewa) {
            $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gagal Cetak Laporan, tanggal sampai nilainya tidak boleh lebih kecil dari tanggal dari.\',false)"');
            redirect(base_url('') . 'admin/laporan');
        } else {
            $dari_tanggal = $this->input->post('dari_tanggal')  . " " . "00:00:00";
            $sampai_tanggal = $this->input->post('sampai_tanggal')  . " " . "23:59:00";

            // Dapatkan semua data transaksi dari database
            $data['sql'] = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON a.id_paket = c.id_paket WHERE a.status_rental = '3' AND a.date_create BETWEEN '$dari_tanggal' AND '$sampai_tanggal';")->result();
            // var_dump($sql);
            $data['dari_tanggal'] = $dari_tanggal;
            $data['sampai_tanggal'] = $sampai_tanggal;
            if (!$data['sql']) {
                // Handle jika data transaksi tidak ditemukan
                $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Data Transaksi Tidak di Temukan.\',false)"');
                redirect(base_url('') . 'admin/laporan');
            }

            // Load library dompdf
            $dompdf = new Dompdf();

            // Optional: Konfigurasi Dompdf jika diperlukan
            $dompdf->set_option('isHtml5ParserEnabled', true);
            $dompdf->set_option('isRemoteEnabled', true);

            // Render HTML ke PDF
            $html = $this->load->view('report', $data, true);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Tampilkan PDF dalam browser atau simpan ke file
            $dompdf->stream("laporan-transaksi-$dari_tanggal-$sampai_tanggal.pdf", array("Attachment" => false));

            // Untuk menyimpan PDF ke file, ganti 'stream' dengan 'output'.
        }
    }
	public function exportsewa()
    {
        $timestamp_sewa = strtotime($this->input->post('dari_tanggal'));
        $timestamp_kembali = strtotime($this->input->post('sampai_tanggal'));

        if ($timestamp_kembali < $timestamp_sewa) {
            $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gagal Cetak Laporan, tanggal sampai nilainya tidak boleh lebih kecil dari tanggal dari.\',false)"');
            redirect(base_url('') . 'admin/laporan');
        } else {
            $dari_tanggal = $this->input->post('dari_tanggal')  . " " . "00:00:00";
            $sampai_tanggal = $this->input->post('sampai_tanggal')  . " " . "23:59:00";

            // Dapatkan semua data transaksi dari database
            $data['sql'] = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON a.id_paket = c.id_paket WHERE a.status_rental = '1' AND a.date_create BETWEEN '$dari_tanggal' AND '$sampai_tanggal';")->result();
            // var_dump($sql);
            $data['dari_tanggal'] = $dari_tanggal;
            $data['sampai_tanggal'] = $sampai_tanggal;
            if (!$data['sql']) {
                // Handle jika data transaksi tidak ditemukan
                $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Data Transaksi Tidak di Temukan.\',false)"');
                redirect(base_url('') . 'admin/laporan');
            }

            // Load library dompdf
            $dompdf = new Dompdf();

            // Optional: Konfigurasi Dompdf jika diperlukan
            $dompdf->set_option('isHtml5ParserEnabled', true);
            $dompdf->set_option('isRemoteEnabled', true);

            // Render HTML ke PDF
            $html = $this->load->view('report', $data, true);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Tampilkan PDF dalam browser atau simpan ke file
            $dompdf->stream("laporan-transaksi-$dari_tanggal-$sampai_tanggal.pdf", array("Attachment" => false));

            // Untuk menyimpan PDF ke file, ganti 'stream' dengan 'output'.
        }
    }
	public function exportpending()
    {
        $timestamp_sewa = strtotime($this->input->post('dari_tanggal'));
        $timestamp_kembali = strtotime($this->input->post('sampai_tanggal'));

        if ($timestamp_kembali < $timestamp_sewa) {
            $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gagal Cetak Laporan, tanggal sampai nilainya tidak boleh lebih kecil dari tanggal dari.\',false)"');
            redirect(base_url('') . 'admin/laporan');
        } else {
            $dari_tanggal = $this->input->post('dari_tanggal')  . " " . "00:00:00";
            $sampai_tanggal = $this->input->post('sampai_tanggal')  . " " . "23:59:00";

            // Dapatkan semua data transaksi dari database
            $data['sql'] = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON a.id_paket = c.id_paket WHERE a.status_rental = '0' AND a.date_create BETWEEN '$dari_tanggal' AND '$sampai_tanggal';")->result();
            // var_dump($sql);
            $data['dari_tanggal'] = $dari_tanggal;
            $data['sampai_tanggal'] = $sampai_tanggal;
            if (!$data['sql']) {
                // Handle jika data transaksi tidak ditemukan
                $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Data Transaksi Tidak di Temukan.\',false)"');
                redirect(base_url('') . 'admin/laporan');
            }

            // Load library dompdf
            $dompdf = new Dompdf();

            // Optional: Konfigurasi Dompdf jika diperlukan
            $dompdf->set_option('isHtml5ParserEnabled', true);
            $dompdf->set_option('isRemoteEnabled', true);

            // Render HTML ke PDF
            $html = $this->load->view('report', $data, true);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Tampilkan PDF dalam browser atau simpan ke file
            $dompdf->stream("laporan-transaksi-$dari_tanggal-$sampai_tanggal.pdf", array("Attachment" => false));

            // Untuk menyimpan PDF ke file, ganti 'stream' dengan 'output'.
        }
    }
	public function exporttotal()
    {
        $timestamp_sewa = strtotime($this->input->post('dari_tanggal'));
        $timestamp_kembali = strtotime($this->input->post('sampai_tanggal'));

        if ($timestamp_kembali < $timestamp_sewa) {
            $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gagal Cetak Laporan, tanggal sampai nilainya tidak boleh lebih kecil dari tanggal dari.\',false)"');
            redirect(base_url('') . 'admin/laporan');
        } else {
            $dari_tanggal = $this->input->post('dari_tanggal')  . " " . "00:00:00";
            $sampai_tanggal = $this->input->post('sampai_tanggal')  . " " . "23:59:00";

            // Dapatkan semua data transaksi dari database
            $data['sql'] = $this->db->query("SELECT * FROM transaksi a LEFT JOIN motor b ON a.id_motor = b.id_motor LEFT JOIN paket_sewa c ON a.id_paket = c.id_paket WHERE  a.date_create BETWEEN '$dari_tanggal' AND '$sampai_tanggal';")->result();
            // var_dump($sql);
            $data['dari_tanggal'] = $dari_tanggal;
            $data['sampai_tanggal'] = $sampai_tanggal;
            if (!$data['sql']) {
                // Handle jika data transaksi tidak ditemukan
                $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Data Transaksi Tidak di Temukan.\',false)"');
                redirect(base_url('') . 'admin/laporan');
            }

            // Load library dompdf
            $dompdf = new Dompdf();

            // Optional: Konfigurasi Dompdf jika diperlukan
            $dompdf->set_option('isHtml5ParserEnabled', true);
            $dompdf->set_option('isRemoteEnabled', true);

            // Render HTML ke PDF
            $html = $this->load->view('report', $data, true);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Tampilkan PDF dalam browser atau simpan ke file
            $dompdf->stream("laporan-transaksi-$dari_tanggal-$sampai_tanggal.pdf", array("Attachment" => false));

            // Untuk menyimpan PDF ke file, ganti 'stream' dengan 'output'.
        }
    }
}
