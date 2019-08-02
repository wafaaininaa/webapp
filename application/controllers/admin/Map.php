<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("map_model");
        $this->load->library('form_validation');
        $this->load->model('m_login');
    }

    public function index()
    {
        $data["users"] = $this->user_model->getAll();
       // $this->load->view("admin/map/listposisi", $data);
        
       if($this->m_login->logged_id())
        {

            $this->load->view("admin/map/listposisi", $data);
        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function gmap($user_id)
    {
        //$data["data"] = $this->map_model->lokasi($user_id);
        $this->load->view("admin/map/gmap", $user_id);
    }
}