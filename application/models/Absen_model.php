<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_model extends CI_Model
{
    private $_table = "presensiabsen";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

	function rekapAbsen($user_id)
    {
        $this->db->select('*');
        $this->db->from('presensiabsen');
        $this->db->join('presensihadir', 'presensihadir.user_id=presensiabsen.user_id', 'left');
        $this->db->where('presensiabsen.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }  

}