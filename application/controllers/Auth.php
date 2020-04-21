<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('userModel');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/Login');
            $this->load->view('template/auth_footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->userModel->getUser($username);
            if ($user) {
                if ($password == $user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($data['role'] == 1) {
                        redirect('Admin');
                    } else {
                        redirect('User');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password </div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Username has not been registered </div>');
                redirect('Auth');
            }
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('nohp', 'Phone', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'Password does not match',
            'min_length' => 'Password is too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'My Doctor Sign-up ';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/Register');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password1'),
                'phone' => $this->input->post('nohp'),
                'role' => 2,
                'image' => 'default.jpg'
            ];
            $this->userModel->insertUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your account has been created </div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Logged Out </div>');
        redirect(base_url());
    }
}
