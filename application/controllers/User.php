<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('userModel');
        $this->load->model('hospitalModel');
        $this->load->model('doctorModel');
        $this->load->model('appointModel');
    }

    public function index()
    {
        $data['title'] = 'MyDoctor';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['member'] = $this->userModel->getAllUser();
        $this->load->view('user/userhome', $data);
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

    public function viewRequest()
    {
        $data['title'] = 'MyDoctor';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['hospital'] = $this->hospitalModel->getAllHospital();
        $data['doctor'] = $this->doctorModel->getAllDoctor();
        $this->load->view('template/user_header', $data);
        $this->load->view('user/view_request', $data);
        $this->load->view('template/user_footer');
    }

    public function viewAppoint()
    {
        $data['title'] = 'MyDoctor';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['appointment'] = $this->appointModel->getAppointmentUser($data['user']['id']);
        $this->load->view('template/user_header', $data);
        $this->load->view('user/view_appointment', $data);
        $this->load->view('template/user_footer');
    }
}
