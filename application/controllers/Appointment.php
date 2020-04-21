<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appointment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('userModel');
        $this->load->model('appointModel');
    }

    public function index()
    {
        $data['title'] = 'Admin-Doctor';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['doctor'] = $this->doctorModel->getAllDoctor();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/view_doctor', $data);
        $this->load->view('template/admin_footer');
    }
}
