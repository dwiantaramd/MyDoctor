<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('userModel');
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function viewMember()
    {
        $data['title'] = 'Admin-User';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['member'] = $this->userModel->getAllUser();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/view_member', $data);
        $this->load->view('template/admin_footer');
    }
}
