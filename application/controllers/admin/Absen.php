<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("absen_model");
        $this->load->model("user_model");
        $this->load->model("hadir_model");
        $this->load->model("m_login");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["users"] = $this->user_model->getAll();
        
        if($this->m_login->logged_id())
        {

            $this->load->view("admin/absen/list", $data);
        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function rekapAbsen($user_id)
    {
        $data["data"] = $this->absen_model->rekapAbsen($user_id);
        $this->load->view("admin/absen/rekapAbsen", $data);
    }
    public function rekapHadir($user_id)
    {
        $data["data"] = $this->hadir_model->rekapAbsen($user_id);
        $this->load->view("admin/absen/rekapHadir", $data);
    }

}