<?php
class Diskon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		login("Admin");
	}


	public function index()
	{
		$data['title'] = 'Data Diskon';
		$data['diskon'] = $this->db->get('diskon')->row_array();
		admin('diskon/index', $data);
	}
	// public function add()
	// {
	// 	$this->form_validation->set_rules('deskripsi_diskon', 'Deskripsi Diskon', 'required', [
	// 		'required' => 'Field Wajib di isi.'
	// 	]);
	// 	if ($this->form_validation->run() == FALSE) {
	// 		$data['title'] = 'Tambah Diskon';
	// 		$data['diskon'] = $this->db->get('diskon')->result();
	// 		admin('diskon/add', $data);
	// 	} else {
	// 		$config['upload_path'] = './assets/img/diskon/';
	// 		$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif';
	// 		$config['max_size']  = '999999';
	// 		$config['encrypt_name'] = TRUE;

	// 		$this->load->library('upload', $config);

	// 		if (!$this->upload->do_upload('gambar_diskon')) {
	// 			$error = $this->upload->display_errors();
	// 			$this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Error, ' . $error . '.\',false)"');
	// 			redirect(base_url('admin/diskon/add'));
	// 		} else {
	// 			$data['gambar_diskon'] = $this->upload->data("file_name");
	// 		}
	// 		$data['deskripsi_diskon']		= $this->input->post('deskripsi_diskon');
	// 		$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Diskon Berhasil di tambahkan.\',false)"');
	// 		$this->db->insert('diskon', $data);
	// 		redirect(base_url('admin/diskon'));
	// 	}
	// }
	// public function update($id)
	// {
	// 	$this->form_validation->set_rules('deskripsi_diskon', 'Deskripsi Diskon', 'required', [
	// 		'required' => 'Field Wajib di isi.'
	// 	]);
	// 	if ($this->form_validation->run() == FALSE) {
	// 		$data['title'] = 'Update Diskon';
	// 		$data['diskon'] = $this->db->get_where('diskon', ['id_diskon' => $id])->row();
	// 		admin('diskon/update', $data);
	// 	} else {
	// 		$gambar = $_FILES['gambar_diskon']['name'];
	// 		if ($gambar != null) {
	// 			$config['upload_path'] = './assets/img/diskon/';
	// 			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif';
	// 			$config['max_size']  = '999999';
	// 			$config['encrypt_name'] = TRUE;

	// 			$this->load->library('upload', $config);

	// 			if (!$this->upload->do_upload('gambar_diskon')) {
	// 				$error = $this->upload->display_errors();
	// 				$this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Error, ' . $error . '.\',false)"');
	// 				redirect(base_url('admin/diskon/add'));
	// 			} else {
	// 				$data['gambar_diskon'] = $this->upload->data("file_name");
	// 			}
	// 		}
	// 		$data['deskripsi_diskon']		= $this->input->post('deskripsi_diskon');

	// 		$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Diskon Berhasil di edit.\',false)"');
	// 		$this->db->where('id_diskon', $id);
	// 		$this->db->update('diskon', $data);
	// 		redirect(base_url('admin/diskon'));
	// 	}
	// }

	public function update()
	{
		$this->form_validation->set_rules('deskripsi_diskon', 'Deskripsi Diskon', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('nilai_diskon', 'Deskripsi Diskon', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Update Diskon';
			$data['diskon'] = $this->db->get('diskon')->row_array();
			admin('diskon/update', $data);
		} else {
			$gambar = $_FILES['gambar_diskon']['name'];
			if ($gambar != null) {
				$config['upload_path'] = './assets/img/diskon/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif';
				$config['max_size']  = '999999';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar_diskon')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Error, ' . $error . '.\',false)"');
					redirect(base_url('admin/diskon/add'));
				} else {
					$data['gambar_diskon'] = $this->upload->data("file_name");
				}
			}
			$data['deskripsi_diskon']		= $this->input->post('deskripsi_diskon');
			$data['nilai_diskon']		= $this->input->post('nilai_diskon');
			$data['status_diskon']		= $this->input->post('status_diskon');

			$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Diskon Berhasil di edit.\',false)"');
			$this->db->where('id_diskon', 1);
			$this->db->update('diskon', $data);
			redirect(base_url('admin/diskon'));
		}
	}
}
