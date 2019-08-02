<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Map_model extends CI_Model
{
    private $_table = "location";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    function lokasi($user_id)
    {
        $this->db->select("*");
        $this->db->from('location');
        $this->db->where('location.user_id', $user_id);
        $this->db->order_by('tanggal', 'desc');
        $data = $this->db->get();
        return $data->result();
    }
}