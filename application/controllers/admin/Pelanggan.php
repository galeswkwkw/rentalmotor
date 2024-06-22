<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		login("Admin");
	}
	public function index()
	{
		$data['title'] = 'Data Pelanggan';
		$this->db->select('nik, nama_pelanggan, no_telepon');
		$this->db->from('transaksi');
		$this->db->group_by('nik'); // Mengelompokkan berdasarkan NIK
		$query = $this->db->get();

		$data['transaksi'] = $query->result();
		admin('pelanggan/index', $data);
	
		
	
	
	}
}

/* End of file Data_pelanggan.php */
