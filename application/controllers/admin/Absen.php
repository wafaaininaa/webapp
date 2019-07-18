<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
        $this->load->model('m_login');
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

    public function rekapAbsen()
    {
        $data["users"] = $this->user_model->getAll();
        $this->load->view("admin/absen/rekapAbsen", $data);
    }

}