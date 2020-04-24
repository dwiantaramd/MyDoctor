<?php
defined('BASEPATH') or exit('No direct script access allowed');

class userModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function getNumUser()
    {
        $this->db->where('role', 2);
        return $this->db->get('user')->num_rows();
    }

    public function getUser($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function getUserbyId($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function insertUser($data)
    {
        $this->db->insert('user', $data);
    }

    public function updateUser($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('user');
    }
}
