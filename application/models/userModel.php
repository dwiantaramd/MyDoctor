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

    public function getUser($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function insertUser($data)
    {
        $this->db->insert('user', $data);
    }
}
