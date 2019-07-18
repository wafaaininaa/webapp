<?php 

class M_login extends CI_Model{	
	function logged_id()
    {
        return $this->session->userdata('nama');
    }
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
}