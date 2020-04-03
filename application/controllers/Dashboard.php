<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('nim') == false) {
            redirect('akun');
        }

        $data['title'] = 'dashboard';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('akun/dasb/ds_topbar');
        $this->load->view('akun/dasb/ds_konten');
        $this->load->view('akun/dasb/ds_footer');
        $this->load->view('template/footer');
    }

    public function profile()
    {
        $data['title'] = 'profile';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('akun/dasb/ds_topbar');
        $this->load->view('akun/dasb/ds_profile');
        $this->load->view('akun/dasb/ds_footer');
        $this->load->view('template/footer');
    }
}
