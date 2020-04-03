<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('nim')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('nim', 'Nim', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'login';
            $this->load->view('template/header', $data);
            $this->load->view('akun/login');
            $this->load->view('template/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nim        = $this->input->post('nim');
        $password   = $this->input->post('password');

        // ambil data dari database berdasarkan inputan[POST] 'nim'
        $user = $this->db->get_where('user', ['nim' => $nim])->row_array();
        if ($user) {
            //cek user ada apa ngga di database
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    // membuat session
                    $data = [
                        'nim'     => $user['nim'],
                        'role_id'   => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    redirect('dashboard');
                } else {
                    redirect('akun');
                }
            }
        } else {
            redirect('akun');
        }
    }

    public function daftar()
    {
        // buat rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('nim', 'Nim', 'trim|required|min_length[10]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'daftar';
            $this->load->view('template/header', $data);
            $this->load->view('akun/daftar');
            $this->load->view('template/footer');
        } else {
            $data = [
                'name'      => htmlspecialchars($this->input->post('name')),
                'email'     => htmlspecialchars($this->input->post('email')),
                'nim'       => htmlspecialchars($this->input->post('nim')),
                'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'image'     => 'default.png',
                'role_id'   => 1,
                'is_active' => 1,
                'date_created'  => time()
            ];

            $this->db->insert('user', $data);
            redirect('akun');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nim');
        redirect('akun');
    }
}
