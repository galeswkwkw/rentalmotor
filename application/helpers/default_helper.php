<?php
function auth($path)
{
    $ci = &get_instance();
    $users = $ci->session->userdata("users");

    if ($users && $users["role"] == "Admin") {
        redirect("admin/dashboard");
    }
    $ci->load->view('auth/templates/head',);
    $ci->load->view("auth/" . $path,);
    $ci->load->view('auth/templates/footer',);
}
function admin($path, $data)
{
    $ci = &get_instance();
    $data['users'] = $ci->session->userdata("users");

    $ci->load->view('admin/templates/head', $data);
    $ci->load->view('admin/templates/sidebar', $data);
    $ci->load->view("admin/" . $path, $data);
    $ci->load->view('admin/templates/footer', $data);
}
function homepage($path, $data = null)
{
    $ci = &get_instance();
    $data['diskon'] = $ci->db->get('diskon')->row_array();
    if ($data['diskon']['status_diskon'] == 0) {
        $data['diskon']['nilai_diskon'] = 0;
    }
    $ci->load->view('home/templates/header', $data);
    $ci->load->view('home/' . $path, $data);
    $ci->load->view('home/templates/footer', $data);
}

function login($a)
{
    $ci = get_instance();
    $users = $ci->session->userdata("users");

    if ($users != null && $users["role"] == "Admin") {
        
    } else {
        redirect(base_url('auth'));
    }
}
