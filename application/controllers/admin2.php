<?php 

class Admin2 extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url('login'));
		}
	}

	function index(){
		$this->load->view("v_admin");
	}
}