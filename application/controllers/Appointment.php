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
        $data['title'] = 'Admin-Appointment';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['appointment'] = $this->appointModel->getAllAppointment();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/view_appointment', $data);
        $this->load->view('template/admin_footer');
    }

    public function addAppointment()
    {
        $this->form_validation->set_rules('hospital_id', 'Hospital', 'required|trim');
        $this->form_validation->set_rules('Doctor_id', 'Doctor', 'required|trim');
        $this->form_validation->set_rules('app_date', 'Date', 'required');

        if ($this->form_validation->run() == false) {
            redirect('User/viewRequest');
        } else {
            $data = [
                'hospital_id' => $this->input->post('hospital_id'),
                'id' => $this->input->post('user_id'),
                'doctor_id' => $this->input->post('Doctor_id'),
                'appointment_date' => $this->input->post('app_date'),
                'complaints' => $this->input->post('app_comp'),
            ];
            $this->appointModel->insertAppointment($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Appointment has been booked</div>');
            redirect('User/viewAppoint');
        }
    }

    public function getAppointmentDetails()
    {
        echo json_encode($this->appointModel->getAppointmentDetail($_POST['id']));
    }

    public function delAppointment($id)
    {
        $this->appointModel->deleteAppointment($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Appointment Data Has Been Deleted</div>');
        redirect('Appointment');
    }
}
