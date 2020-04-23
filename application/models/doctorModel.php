<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DoctorModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllDoctor()
    {
        $this->db->select('doctor.*, hospital.hos_name as hospital_name');
        $this->db->from('doctor');
        $this->db->join('hospital', 'hospital.hospital_id = doctor.hospital_id');
        return $this->db->get()->result_array();
    }

    public function getDoctorbyId($id)
    {
        $this->db->select('doctor.*, hospital.hos_name as hospital_name');
        $this->db->from('doctor');
        $this->db->join('hospital', 'hospital.hospital_id = doctor.hospital_id');
        $this->db->where('doctor_id', $id);
        return $this->db->get()->row_array();
    }

    public function getDoctorbyHos($id)
    {
        return $this->db->get_where('doctor', ['hospital_id' => $id])->result_array();
    }

    public function getNumDoctor()
    {
        return $this->db->get('doctor')->num_rows();
    }

    public function getHospital()
    {
        return $this->db->get('hospital')->result_array();
    }

    public function insertDoctor($data)
    {
        return $this->db->insert('doctor', $data);
    }

    public function updateDoctor($data, $id)
    {
        $this->db->set($data);
        $this->db->where('doctor_id', $id);
        $this->db->update('doctor');
    }

    public function deleteDoctor($id)
    {
        $this->db->where('doctor_id', $id);
        $this->db->delete('doctor');

        $this->db->where('doctor_id', $id);
        $this->db->delete('appointment');
    }
}
