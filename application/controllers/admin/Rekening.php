<?php
class Rekening extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		login("Admin");
	}

    public function index()
    {
        $data['title'] = 'Data Rekening Pembayaran';
        $data['rekening'] = $this->db->get('rekening_pembayaran')->result();
        admin('rekening/index', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_bank', 'Kode Tipe', 'required', [
            'required' => 'Field Wajib di isi.'
        ]);
        $this->form_validation->set_rules('nomor_rekening', 'Nama Tipe', 'required', [
            'required' => 'Field Wajib di isi.'
        ]);
        $this->form_validation->set_rules('nama_rekening', 'Nama Tipe', 'required', [
            'required' => 'Field Wajib di isi.'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Data Rekening Pembayaran';
            admin('rekening/add', $data);
        } else {
            $data['nama_bank'] = $this->input->post('nama_bank');
            $data['nomor_rekening'] = $this->input->post('nomor_rekening');
            $data['nama_rekening'] = $this->input->post('nama_rekening');

            $this->db->insert('rekening_pembayaran', $data);
            $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Rekening Pembayaran Berhasil di tambahkan.\',false)"');
            redirect(base_url('admin/rekening'));
        }
    }

    public function update($id)
    {
        $this->form_validation->set_rules('nama_bank', 'Kode Tipe', 'required', [
            'required' => 'Field Wajib di isi.'
        ]);
        $this->form_validation->set_rules('nomor_rekening', 'Nama Tipe', 'required', [
            'required' => 'Field Wajib di isi.'
        ]);
        $this->form_validation->set_rules('nama_rekening', 'Nama Tipe', 'required', [
            'required' => 'Field Wajib di isi.'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['tp'] = $this->db->query("SELECT * FROM rekening_pembayaran WHERE id_rekening='$id'")->row();
            $data['title'] = 'Update Data Rekening Pembayaran';
            admin('rekening/update', $data);
        } else {
            $data['nama_bank']        = $this->input->post('nama_bank');
            $data['nomor_rekening']        = $this->input->post('nomor_rekening');
            $data['nama_rekening']        = $this->input->post('nama_rekening');

            $this->db->where('id_rekening', $id);
            $this->db->update('rekening_pembayaran', $data);
            $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Rekening Pembayaran Berhasil di update.\',false)"');
            redirect(base_url('admin/rekening'));
        }
    }

    public function delete($id)
    {
        $this->db->where('id_rekening', $id);
        $this->db->delete('rekening_pembayaran');
        $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Rekening Pembayaran Berhasil di delete.\',false)"');
        redirect(base_url('admin/rekening'));
    }
}
