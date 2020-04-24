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
        $this->load->view('template/user_footer', $data);
    }

    public function viewAppoint()
    {
        $data['title'] = 'MyDoctor';
        $data['user'] = $this->userModel->getUser($this->session->userdata('username'));
        $data['appointment'] = $this->appointModel->getAppointmentUser($data['user']['id']);
        $this->load->view('template/user_header', $data);
        $this->load->view('user/view_appointment', $data);
        $this->load->view('template/user_footer', $data);
    }

    public function editProfile($id)
    {
        $this->form_validation->set_rules('edit_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('edit_phone', 'Phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->viewAppoint();
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
                redirect('User/viewAppoint');
            } else {
                $config['upload_path']      = './assets/img';
                $config['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('edit_image')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Edit Profile Failed</div>');
                    redirect('User/viewAppoint');
                } else {
                    $image = $this->upload->data('file_name');
                    $data = [
                        'name' => $name,
                        'phone' => $phone,
                        'image' => $image
                    ];
                    $this->userModel->updateUser($data, $id);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile has been updated</div>');
                    redirect('User/viewAppoint');
                }
            }
        }
    }

    public function changePassword($id)
    {
        $this->form_validation->set_rules('cur_password', 'Current Password', 'required');
        $this->form_validation->set_rules('new_password', 'Password', 'required|trim|min_length[4]|matches[re_password]', [
            'matches' => 'Password does not match',
            'min_length' => 'Password is too short'
        ]);
        $this->form_validation->set_rules('re_password', 'Password', 'required|trim|matches[new_password]');

        if ($this->form_validation->run() == false) {
            $this->viewAppoint();
        } else {
            $check = $this->userModel->getUserbyId($id);
            $current = $this->input->post('cur_password');
            $new = $this->input->post('new_password');

            if ($check['password'] == $current) {
                $data = [
                    'password' => $new
                ];
                $this->userModel->updateUser($data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed</div>');
                redirect('User/viewAppoint');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                redirect('User/viewAppoint');
            }
        }
    }
}
