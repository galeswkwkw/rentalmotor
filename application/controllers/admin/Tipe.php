<?php
class Tipe extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		login("Admin");
	}

	public function index()
	{
		$data['title'] = 'Data Tipe';
		$data['type'] = $this->db->get('type')->result();
		admin('tipe/index', $data);
	}
	
	public function add()
	{
		$this->form_validation->set_rules('kode_type', 'Kode Tipe', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('nama_type', 'Nama Tipe', 'required', [
			'required' => 'Field Wajib di isi.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tambah Data Tipe';
			admin('tipe/add', $data);
		} else {
			$data['kode_type'] = $this->input->post('kode_type');
			$data['nama_type'] = $this->input->post('nama_type');

			$this->db->insert('type', $data);
			$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Tipe Motor Berhasil di tambahkan.\',false)"');
			redirect(base_url('admin/tipe'));
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('kode_type', 'Kode Tipe', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('nama_type', 'Nama Tipe', 'required', [
			'required' => 'Field Wajib di isi.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['tp'] = $this->db->query("SELECT * FROM type WHERE id_type='$id'")->row();
			$data['title'] = 'Update Data Tipe';
			admin('tipe/update', $data);
		} else {
			$data['kode_type']		= $this->input->post('kode_type');
			$data['nama_type']		= $this->input->post('nama_type');

			$this->db->where('id_type', $id);
			$this->db->update('type', $data);
			$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Tipe Motor Berhasil di update.\',false)"');
			redirect(base_url('admin/tipe'));
		}
	}

	public function delete($id)
	{
		$this->db->where('id_type', $id);
		$this->db->delete('type');
		$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Tipe Motor Berhasil di delete.\',false)"');
		redirect(base_url('admin/tipe'));
	}
}
