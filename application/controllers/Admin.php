<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('userModel');
        $this->load->model('doctorModel');
        $this->load->model('hospitalModel');
        $this->load->model('appointModel');
    }

    public function index()
    {
        $data['title'] = 'Admin-Home';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['hospital'] = $this->hospitalModel->getNumHospital();
        $data['num_user'] = $this->userModel->getNumUser();
        $data['doctor'] = $this->doctorModel->getNumDoctor();
        $data['appointment'] = $this->appointModel->getNumAppoint();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/adminhome');
        $this->load->view('template/admin_footer');
    }
}
