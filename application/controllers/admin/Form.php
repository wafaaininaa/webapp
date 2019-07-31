<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
        $this->load->model("M_login");
    }

    public function index()
    {
        $data["users"] = $this->User_model->getAll();
        
        if($this->M_login->logged_id()){
            $this->load->view("admin/form/list", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function add()
    {
        $user = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/form/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/form');
       
        $user = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        
        $this->load->view("admin/form/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->User_model->delete($id)) {
            redirect(site_url('admin/form'));
        }
    }

    	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}