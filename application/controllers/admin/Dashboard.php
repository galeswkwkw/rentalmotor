<?php
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		login("Admin");
	}

	public function index()
	{
		$data['motor'] = $this->db->get('motor')->num_rows();
		$data['transaksi'] = $this->db->get('transaksi')->num_rows();
		$data['paket'] = $this->db->get('paket_sewa')->num_rows();
		$data['pendingTransaksi'] = $this->db->query("SELECT * FROM transaksi WHERE status_rental='0'")->num_rows();
		$data['selesaiTransaksi'] = $this->db->query("SELECT * FROM transaksi WHERE status_rental='3'")->num_rows();
		$data['rentalTransaksi'] = $this->db->query("SELECT * FROM transaksi WHERE status_rental='1'")->num_rows();
		$data['terlambatTransaksi'] = $this->db->query("SELECT * FROM transaksi WHERE terlambat !='0'")->num_rows();
		$data['pelanggan'] = $this->db->query("SELECT COUNT(DISTINCT nik) AS jumlahPelanggan FROM transaksi WHERE nik !=''")->row()->jumlahPelanggan;
		$data['title'] = "Dashboard";
		admin('index', $data);
	}
}
