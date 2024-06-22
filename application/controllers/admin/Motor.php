<?php
class Motor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		login("Admin");
	}


	public function index()
	{
		$data['title'] = 'Data Motor';
		$data['motor'] = $this->db->get('motor')->result();
		admin('motor/index', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('kode_type', 'Kode Type', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('merek', 'Merek', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('denda', 'Denda', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('no_plat', 'No Plat', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('tahun', 'Tahun', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('warna', 'Warna', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Field Wajib di isi.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tambah Data Motor';
			$data['type'] = $this->rental_model->get_data('type')->result();
			admin('motor/add', $data);
		} else {
			$kode_type 	 	= $this->input->post('kode_type');
			$merek  		= $this->input->post('merek');
			$harga  		= $this->input->post('harga');
			$denda  		= $this->input->post('denda');
			$no_plat 		= $this->input->post('no_plat');
			$warna 			= $this->input->post('warna');
			$tahun 			= $this->input->post('tahun');
			$status 		= $this->input->post('status');
			$riwayat_servis = $this->input->post('riwayat_servis');
			if ($riwayat_servis == null) {
				$riwayat_servis = "-";
			}

			$config['upload_path'] = './assets/img/motor/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif';
			$config['max_size']  = '999999';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Motor Error, ' . $error . '.\',false)"');
				redirect(base_url('admin/motor/add'));
			} else {
				$name = $this->upload->data("file_name");
			}
			$config['upload_path'] = './assets/img/motor/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif';
			$config['max_size']  = '999999';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar_kondisi')) {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Kondisi Motor Error, ' . $error . '.\',false)"');
				redirect(base_url('admin/motor/add'));
			} else {
				$gambar_kondisi = $this->upload->data("file_name");
			}

			$data = array(
				'kode_type' => $kode_type,
				'merek' => $merek,
				'harga' => $harga,
				'denda' => $denda,
				'no_plat' => $no_plat,
				'tahun' => $tahun,
				'warna' => $warna,
				'status' => $status,
				'riwayat_servis' => $riwayat_servis,
				'gambar' => $name,
				'gambar_kondisi' => $gambar_kondisi,
			);

			$this->db->insert('motor', $data);
			$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Motor Berhasil di tambahkan.\',false)"');
			redirect(base_url('') . 'admin/motor');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('kode_type', 'Kode Type', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('merek', 'Merek', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('denda', 'Denda', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('no_plat', 'No Plat', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('tahun', 'Tahun', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('warna', 'Warna', 'required', [
			'required' => 'Field Wajib di isi.'
		]);
		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Field Wajib di isi.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Update Data Motor';
			$data['mb'] = $this->db->query("SELECT * FROM motor mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_motor='$id'")->row();
			$data['type'] = $this->rental_model->get_data('type')->result();

			admin('motor/update', $data);
		} else {
			$data['kode_type'] 	 	= $this->input->post('kode_type');
			$data['merek']  		= $this->input->post('merek');
			$data['harga']  		= $this->input->post('harga');
			$data['denda']  		= $this->input->post('denda');
			$data['no_plat'] 		= $this->input->post('no_plat');
			$data['warna'] 			= $this->input->post('warna');
			$data['tahun'] 			= $this->input->post('tahun');
			$data['status'] 		= $this->input->post('status');
			$data['riwayat_servis'] = $this->input->post('riwayat_servis');
			$gambar 		= $_FILES['gambar']['name'];
			if ($gambar != null) {
				$config['upload_path'] = './assets/img/motor/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif';
				$config['max_size']  = '999999';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Motor Error, ' . $error . '.\',false)"');
					redirect(base_url('admin/motor/update/') . $id);
				} else {
					$data['gambar'] = $this->upload->data("file_name");
				}
			}
			$gambar_kondisi 		= $_FILES['gambar_kondisi']['name'];
			if ($gambar_kondisi != null) {
				$config['upload_path'] = './assets/img/motor/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif';
				$config['max_size']  = '999999';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar_kondisi')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Kondisi Motor Error, ' . $error . '.\',false)"');
					redirect(base_url('admin/motor/update/') . $id);
				} else {
					$data['gambar_kondisi'] = $this->upload->data("file_name");
				}
			}
			$this->db->where('id_motor', $id);
			$this->db->update('motor', $data);
			$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Motor Berhasil di edit.\',false)"');
			redirect(base_url('') . 'admin/motor');
		}
	}
	public function detail($id)
	{
		$data['title'] = 'Detail Motor';
		$data['detail'] = $this->rental_model->ambil_id_motor($id);
		admin('motor/detail', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_motor', $id);
		$this->db->delete('motor');
		$this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Motor Berhasil di hapus.\',false)"');
		redirect(base_url('') . 'admin/motor');
	}
}
