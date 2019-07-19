<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("absen_model");
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["users"] = $this->user_model->getAll();
        $this->load->view("admin/absen/list", $data);
    }

    public function rekapAbsen($user_id)
    {
        // $data['data'] = $this->db->get_where('presensihadir', ['user_id'=>$user_id])->row();
        // //$data2['data2'] = $this->db->get_where('presensihadir', ['user_id'=>$user_id])->row();
        $this->load->model('absen_model');
        $data['hari'] = $this->absen_model->rekapAbsen($user_id);
        $data['tanggal'] = $this->absen_model->rekapAbsen($user_id);
        $data['keterangan'] = $this->absen_model->rekapAbsen($user_id);
        $data['alasan_absen'] = $this->absen_model->rekapAbsen($user_id);
        $this->load->view('admin/absen/rekapAbsen', $data);
    }

}