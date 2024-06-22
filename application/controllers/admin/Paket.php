<?php
class Paket extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		login("Admin");
	}

	public function index()
	{
		$data['title'] = 'Data Paket Sewa';
		$data['paket_sewa'] = $this->db->get('paket_sewa')->result();
		admin('paket/index', $data);
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required', [
			'required' => 'Field Wajib di isi'
		]);
		$this->form_validation->set_rules('harga_paket', 'Harga Paket', 'required', [
			'required' => 'Field Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi_paket', 'Nama Tipe', 'required', [
			'required' => 'Field Wajib di isi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Update Data Paket";
			$data['type'] = $this->db->query("SELECT * FROM paket_sewa WHERE id_paket='$id'")->result();
			admin('paket/update', $data);
		} else {
			$data['nama_paket']		 	= $this->input->post('nama_paket');
			$data['harga_paket'] 		= $this->input->post('harga_paket');
			$data['deskripsi_paket'] 	= $this->input->post('deskripsi_paket');

			$this->db->where('id_paket', $id);
			$this->db->update('paket_sewa', $data);

			$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Paket Berhasil di edit.\',false)"');
			redirect(base_url('') . 'admin/paket');
		}
	}

	public function tambah_paket()
	{
		$this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required', [
			'required' => 'Field Wajib di isi'
		]);
		$this->form_validation->set_rules('harga_paket', 'Harga Paket', 'required', [
			'required' => 'Field Wajib di isi'
		]);
		$this->form_validation->set_rules('deskripsi_paket', 'Nama Tipe', 'required', [
			'required' => 'Field Wajib di isi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Tambah Data Paket";
			$data['paket_sewa'] = $this->rental_model->get_data('paket_sewa')->result();
			admin('paket/add', $data);
		} else {
			$data['nama_paket']		 	= $this->input->post('nama_paket');
			$data['harga_paket'] 		= $this->input->post('harga_paket');
			$data['deskripsi_paket'] 	= $this->input->post('deskripsi_paket');

			$this->db->insert('paket_sewa', $data);
			$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Paket Berhasil di tambahkan.\',false)"');
			redirect(base_url('') . 'admin/paket');
		}
	}

	public function delete_paket($id)
	{
		$this->db->where('id_paket', $id);
		$this->db->delete('paket_sewa');

		$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Paket Berhasil di hapus.\',false)"');
		redirect(base_url('') . 'admin/paket');
	}
}
