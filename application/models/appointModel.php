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
        return $this->db->get('appointment')->result_array();
    }

    public function getAllAppointmentById($id)
    {
        return $this->db->get_where('appointment', ['appointment_id' => $id])->row_array();
    }

    public function createAppointment($data)
    {
        return $this->db->insert('appointment', $data);
    }

}
