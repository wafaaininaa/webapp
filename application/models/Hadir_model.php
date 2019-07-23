<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hadir_model extends CI_Model
{
    private $_table = "presensihadir";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

	function rekapAbsen($user_id)
    {
        $this->db->select('*');
        $this->db->from('presensihadir');
        // $this->db->join('presensiabsen', 'presensihadir.id=presensiabsen.id');
        // $this->db->join('apps', 'apps.user_id=presensiabsen.user_id');
        $this->db->where('presensihadir.user_id ', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    function getLocation($user_id){
        $this->db->select('nama, latitude, longitude');
        $this->db->from('presensihadir');
        $this->db->where('presensihadir.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }    

}