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

    public function editProfile($id)
    {
        $this->form_validation->set_rules('edit_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('edit_phone', 'Phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $name = $this->input->post('edit_name');
            $phone = $this->input->post('edit_phone');
            $image = $_FILES['edit_image']['name'];

            if (!$image) {
                $data = [
                    'name' => $name,
                    'phone' => $phone,
                ];
                $this->userModel->updateUser($data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile has been updated</div>');
                redirect('Admin');
            } else {
                $config['upload_path']      = './assets/img';
                $config['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('edit_image')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Edit Profile Failed</div>');
                    redirect('Admin');
                } else {
                    $image = $this->upload->data('file_name');
                    $data = [
                        'name' => $name,
                        'phone' => $phone,
                        'image' => $image
                    ];
                    $this->userModel->updateUser($data, $id);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile has been updated</div>');
                    redirect('Admin');
                }
            }
        }
    }
}
