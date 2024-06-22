<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required', [
            'required' => 'Kolom Wajib di isi.'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => 'Kolom Wajib di isi.'
        ]);

        if ($this->form_validation->run() == FALSE) {
            auth('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $sql = $this->db->query("SELECT * FROM users WHERE username = '$username'")->row_array();

            if ($sql != null) {
                if (password_verify($password, $sql['password'])) {

                    $array = array(
                        'users' => $sql
                    );

                    $this->session->set_userdata($array);

                    if ($sql['role'] == 'Admin') {
                        $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Login Berhasil, Selamat Datang ' . $sql['nama_depan'] . ' ' . $sql['nama_belakang'] . '.\',false)"');
                        redirect(base_url('admin/dashboard'));
                    } else {
                        $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Login Berhasil, Selamat Datang ' . $sql['nama_depan'] . ' ' . $sql['nama_belakang'] . '.\',false)"');
                        redirect(base_url('pelanggan/dashboard'));
                    }
                } else {
                    $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Login Gagal, Silahkan Cek Username dan Password anda.\',false)"');
                    redirect(base_url('auth'));
                }
            } else {
                $this->session->set_flashdata('pesan', 'onload="notif(\'error\',\'Login Gagal, Silahkan Cek Username dan Password anda.\',false)"');
                redirect(base_url('auth'));
            }
        }
    }

    public function logout()
    {
        
        $this->session->unset_userdata('users');
        $this->session->set_flashdata('pesan', 'onload="notif(\'success\',\'Berhasil Logout.\',false)"');
        redirect(base_url(''));
    }
}

/* End of file Auth.php */
