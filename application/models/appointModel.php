<?php
defined('BASEPATH') or exit('No direct script access allowed');

class appointModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllAppointment()
    {
        $this->db->select('appointment.*, hospital.hos_name as hospital_name, doctor.doc_name as doctor_name, user.name as name');
        $this->db->from('appointment');
        $this->db->join('hospital', 'hospital.hospital_id = appointment.hospital_id');
        $this->db->join('doctor', 'doctor.doctor_id = appointment.doctor_id');
        $this->db->join('user', 'user.id = appointment.id');
        return $this->db->get()->result_array();
    }

    public function getAppointmentUser($id)
    {
        $this->db->select('appointment.*, hospital.hos_name as hospital_name, doctor.doc_name as doctor_name, doctor.specialist as specialist');
        $this->db->from('appointment');
        $this->db->join('hospital', 'hospital.hospital_id = appointment.hospital_id');
        $this->db->join('doctor', 'doctor.doctor_id = appointment.doctor_id');
        $this->db->where('id', $id);
        return $this->db->get()->result_array();
    }

    public function getAppointmentDetail($id)
    {
        $this->db->select('appointment.*, hospital.hos_name as hospital_name, doctor.doc_name as doctor_name, doctor.specialist as specialist, user.name as cus_name');
        $this->db->from('appointment');
        $this->db->join('hospital', 'hospital.hospital_id = appointment.hospital_id');
        $this->db->join('doctor', 'doctor.doctor_id = appointment.doctor_id');
        $this->db->join('user', 'user.id = appointment.id');
        $this->db->where('appointment_id', $id);
        return $this->db->get()->row_array();
    }

    public function getNumAppoint()
    {
        return $this->db->get('appointment')->num_rows();
    }

    public function insertAppointment($data)
    {
        return $this->db->insert('appointment', $data);
    }

    public function deleteAppointment($id)
    {
        $this->db->where('appointment_id', $id);
        $this->db->delete('appointment');
    }
}
