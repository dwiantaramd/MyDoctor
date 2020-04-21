<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doctor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('userModel');
        $this->load->model('doctorModel');
    }

    public function index()
    {
        $data['title'] = 'Admin-Doctor';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['doctor'] = $this->doctorModel->getAllDoctor();
        $data['hospital'] = $this->doctorModel->getHospital();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/view_doctor', $data);
        $this->load->view('template/admin_footer');
    }

    public function addDoctor()
    {
        $this->form_validation->set_rules('doc_name', 'Doctor Name', 'required|trim');
        $this->form_validation->set_rules('specialist', 'Specialist', 'required|trim');
        $this->form_validation->set_rules('hospital_name', 'Hospital', 'required');
        $this->form_validation->set_rules('doc_gender', 'Gender', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $doc_name       = $this->input->post('doc_name');
            $specialist     = $this->input->post('specialist');
            $hospital_id    = $this->input->post('hospital_name');
            $doc_gender     = $this->input->post('doc_gender');
            $doc_image      = $_FILES['doc_image']['name'];

            if (!$doc_image) {
                $doc_image = 'docdefault.jpg';
                $data = [
                    'doc_name' => $doc_name,
                    'specialist' => $specialist,
                    'doc_gender' => $doc_gender,
                    'doc_image' => $doc_image,
                    'hospital_id' => $hospital_id
                ];
                $this->doctorModel->insertDoctor($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Doctor has been added </div>');
                redirect('Doctor');
            } else {
                $config['upload_path']      = './assets/img/doctor';
                $config['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('doc_image')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Add Doctor Failed</div>');
                    redirect('Doctor');
                } else {
                    $doc_image = $this->upload->data('file_name');
                    $data = [
                        'doc_name' => $doc_name,
                        'specialist' => $specialist,
                        'doc_gender' => $doc_gender,
                        'doc_image' => $doc_image,
                        'hospital_id' => $hospital_id
                    ];
                    $this->doctorModel->insertDoctor($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Doctor has been added </div>');
                    redirect('Doctor');
                }
            }
        }
    }

    public function getEdit()
    {
        echo json_encode($this->doctorModel->getDoctorbyId($_POST['id']));
    }

    public function editDoctor()
    {
        $this->form_validation->set_rules('doc_name', 'Doctor Name', 'required|trim');
        $this->form_validation->set_rules('specialist', 'Specialist', 'required|trim');
        $this->form_validation->set_rules('hospital_name', 'Hospital', 'required');
        $this->form_validation->set_rules('doc_gender', 'Gender', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $doctor_id      = $this->input->post('doctor_id');
            $doc_name       = $this->input->post('doc_name');
            $specialist     = $this->input->post('specialist');
            $hospital_id    = $this->input->post('hospital_name');
            $doc_gender     = $this->input->post('doc_gender');
            $doc_image      = $_FILES['doc_image']['name'];

            if (!$doc_image) {
                $data = [
                    'doc_name' => $doc_name,
                    'specialist' => $specialist,
                    'doc_gender' => $doc_gender,
                    'hospital_id' => $hospital_id
                ];
                $this->doctorModel->updateDoctor($data, $doctor_id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Doctor data has been edited</div>');
                redirect('Doctor');
            } else {
                $config['upload_path']      = './assets/img/doctor';
                $config['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('doc_image')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Edit Doctor Failed</div>');
                    redirect('Doctor');
                } else {
                    $doc_image = $this->upload->data('file_name');
                    $data = [
                        'doc_name' => $doc_name,
                        'specialist' => $specialist,
                        'doc_gender' => $doc_gender,
                        'doc_image' => $doc_image,
                        'hospital_id' => $hospital_id
                    ];
                    $this->doctorModel->updateDoctor($data, $doctor_id);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Doctor data has been edited</div>');
                    redirect('Doctor');
                }
            }
        }
    }

    public function delDoctor($id)
    {
        $this->doctorModel->deleteDoctor($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Doctor Data has been deleted</div>');
        redirect('Doctor');
    }
}
