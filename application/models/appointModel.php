<?php
defined('BASEPATH') or exit('No direct script access allowed');

class appointModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllAppoint()
    {
        $this->db->select('doctor.*, hospital.hos_name as hospital_name');
        $this->db->from('doctor');
        $this->db->join('hospital', 'hospital.hospital_id = doctor.hospital_id');
        return $this->db->get()->result_array();
    }
}
