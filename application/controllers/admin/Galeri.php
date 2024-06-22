<?php
class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        login("Admin");
    }


    public function index()
    {
        $this->form_validation->set_rules('a', '', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Data Galeri Testimoni';
            $data['galeri'] = $this->db->get('galeri')->result();
            admin('galeri/index', $data);
        } else {

            $config['upload_path'] = './assets/img/galeri/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif';
            $config['max_size']  = '999999';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Gambar Error, ' . $error . '.\',false)"');
                redirect(base_url('admin/galeri'));
            } else {
                $data['gambar'] = $this->upload->data("file_name");

                $this->db->insert('galeri', $data);
                $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Galeri Testimoni Berhasil di tambahkan.\',false)"');
                redirect(base_url('admin/galeri'));
            }
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeri');
        $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Data Galeri Testimoni Berhasil di delete.\',false)"');
        redirect(base_url('admin/galeri'));
    }
}
