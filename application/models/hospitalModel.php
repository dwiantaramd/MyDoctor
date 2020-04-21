<?php
defined('BASEPATH') or exit('No direct script access allowed');

class hospitalModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllHospital()
    {
        return $this->db->get('hospital')->result_array();
    }

    public function getHospitalbyId($id)
    {
        return $this->db->get_where('hospital', ['hospital_id' => $id])->row_array();
    }

    public function insertHospital($data)
    {
        return $this->db->insert('hospital', $data);
    }

    public function updateHospital($data, $id)
    {
        $this->db->set($data);
        $this->db->where('hospital_id', $id);
        $this->db->update('hospital');
    }

    public function deleteHospital($id)
    {
        $this->db->where('hospital_id', $id);
        $this->db->delete('hospital');
    }
}
