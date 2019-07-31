<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Absen_model");
        $this->load->model("User_model");
        $this->load->model("Hadir_model");
        $this->load->model("M_login");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["users"] = $this->User_model->getAll();
        
        if($this->M_login->logged_id())
        {

            $this->load->view("admin/absen/list", $data);
        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function rekapAbsen($user_id)
    {
        $data["data"] = $this->Absen_model->rekapAbsen($user_id);
        $this->load->view("admin/absen/rekapAbsen", $data);
    }
    public function rekapHadir($user_id)
    {
        $data["data"] = $this->Hadir_model->rekapAbsen($user_id);
        $this->load->view("admin/absen/rekapHadir", $data);
    }

}