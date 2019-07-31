<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->model("Map_model");
        $this->load->library('form_validation');
        $this->load->model('M_login');
    }

    public function index()
    {
        $data["users"] = $this->User_model->getAll();
       // $this->load->view("admin/map/listposisi", $data);
        
       if($this->M_login->logged_id())
        {

            $this->load->view("admin/map/listposisi", $data);
        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function gmap($user_id)
    {
        $this->load->view("admin/map/gmap", $user_id);
    }
}