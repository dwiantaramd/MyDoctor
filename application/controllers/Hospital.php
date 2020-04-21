<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hospital extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('userModel');
        $this->load->model('hospitalModel');
    }

    public function index()
    {
        $data['title'] = 'Admin-Hospital';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['hospital'] = $this->hospitalModel->getAllHospital();
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/view_hospital', $data);
        $this->load->view('template/admin_footer');
    }

    public function addHospital()
    {
        $this->form_validation->set_rules('hos_name', 'Hospital Name', 'required|trim|is_unique[hospital.hos_name]');
        $this->form_validation->set_rules('hos_address', 'Hospital Address', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $hos_name       = $this->input->post('hos_name');
            $hos_address    = $this->input->post('hos_address');
            $hos_image      = $_FILES['hos_image']['name'];

            if (!$hos_image) {
                $hos_image = 'hosdefault.jpg';
                $data = [
                    'hos_name' => $hos_name,
                    'hos_address' => $hos_address,
                    'hos_image' => $hos_image,
                ];
                $this->hospitalModel->insertHospital($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hospital data has been added</div>');
                redirect('Hospital');
            } else {
                $config['upload_path']      = './assets/img/hospital';
                $config['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('hos_image')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Add Hospital Failed</div>');
                    redirect('Hospital');
                } else {
                    $hos_image = $this->upload->data('file_name');
                    $data = [
                        'hos_name' => $hos_name,
                        'hos_address' => $hos_address,
                        'hos_image' => $hos_image,
                    ];
                    $this->hospitalModel->insertHospital($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hospital data has been added </div>');
                    redirect('Hospital');
                }
            }
        }
    }

    public function getEdit()
    {
        echo json_encode($this->hospitalModel->getHospitalbyId($_POST['id']));
    }

    public function editHospital()
    {
        $this->form_validation->set_rules('hos_name', 'Hospital Name', 'required|trim');
        $this->form_validation->set_rules('hos_address', 'Hospital Address', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $hos_id         = $this->input->post('hos_id');
            $hos_name       = $this->input->post('hos_name');
            $hos_address    = $this->input->post('hos_address');
            $hos_image      = $_FILES['hos_image']['name'];

            if (!$hos_image) {
                $data = [
                    'hos_name' => $hos_name,
                    'hos_address' => $hos_address,
                ];
                $this->hospitalModel->updateHospital($data, $hos_id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hospital data has been edited</div>');
                redirect('Hospital');
            } else {
                $config['upload_path']      = './assets/img/hospital';
                $config['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('hos_image')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Edit data failed</div>');
                    redirect('Hospital');
                } else {
                    $hos_image = $this->upload->data('file_name');
                    $data = [
                        'hos_name' => $hos_name,
                        'hos_address' => $hos_address,
                        'hos_image' => $hos_image,
                    ];
                    $this->hospitalModel->updateHospital($data, $hos_id);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hospital data has been edited</div>');
                    redirect('Hospital');
                }
            }
        }
    }

    public function delHospital($id)
    {
        $this->hospitalModel->deleteHospital($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hospital Data has been deleted</div>');
        redirect('Hospital');
    }
}
