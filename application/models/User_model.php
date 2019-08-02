<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "apps";

    public $user_id;
    public $satker;
    public $kepalaSatker;
    public $nip;
    public $tahunAnggaran;
    public $noKontrak;
    public $tglKontrak;
    public $nama;
    public $kategoriTenaga;
    public $username;
    public $password;
    public $jabatan;
    public $noTelp;
    public $tglMobilisasi;
    public $tglDemobilisasi;
    public $jamMasuk;
    public $latitude;
    public $longitude;
    public $image;

    public function rules()
    {
        return [
            ['field' => 'satker',
            'label' => 'Satker',
            'rules' => 'required'],

            ['field' => 'kepalaSatker',
            'label' => 'Kepala Satker',
            'rules' => 'required'],

            ['field' => 'nip',
            'label' => 'NIP',
            'rules' => 'required'],

            ['field' => 'tahunAnggaran',
            'label' => 'Tahun Anggaran',
            'rules' => 'required'],

            ['field' => 'noKontrak',
            'label' => 'Nomor Kontrak',
            'rules' => 'required'],

            ['field' => 'tglKontrak',
            'label' => 'Tanggal Kontrak',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'kategoriTenaga',
            'label' => 'Kategori Tenaga',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required'],

            ['field' => 'noTelp',
            'label' => 'Nomor Telepon',
            'rules' => 'required'],

            ['field' => 'tglMobilisasi',
            'label' => 'Tanggal Mobilisasi',
            'rules' => 'required'],

            ['field' => 'tglDemobilisasi',
            'label' => 'Tanggal Demobilisasi',
            'rules' => 'required'],

            ['field' => 'jamMasuk',
            'label' => 'Jam Masuk',
            'rules' => 'required'],

            ['field' => 'latitude',
            'label' => 'Latitude',
            'rules' => 'required'],

            ['field' => 'longitude',
            'label' => 'Longitude',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->user_id = uniqid();
        $this->satker = $post["satker"];
        $this->kepalaSatker = $post["kepalaSatker"];
        $this->nip = $post["nip"];
        $this->tahunAnggaran = $post["tahunAnggaran"];
        $this->noKontrak = $post["noKontrak"];
        $this->tglKontrak = $post["tglKontrak"];
        $this->nama = $post["nama"];
        $this->kategoriTenaga = $post["kategoriTenaga"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->jabatan = $post["jabatan"];
        $this->noTelp = $post["noTelp"];
        $this->tglMobilisasi = $post["tglMobilisasi"];
        $this->tglDemobilisasi = $post["tglDemobilisasi"];
        $this->jamMasuk = $post["jamMasuk"];
        $this->latitude = $post["latitude"];
        $this->longitude = $post["longitude"];
        $this->image = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->user_id = $post["id"];
        $this->satker = $post["satker"];
        $this->kepalaSatker = $post["kepalaSatker"];
        $this->nip = $post["nip"];
        $this->tahunAnggaran = $post["tahunAnggaran"];
        $this->noKontrak = $post["noKontrak"];
        $this->tglKontrak = $post["tglKontrak"];
        $this->nama = $post["nama"];
        $this->kategoriTenaga = $post["kategoriTenaga"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->jabatan = $post["jabatan"];
        $this->noTelp = $post["noTelp"];
        $this->tglMobilisasi = $post["tglMobilisasi"];
        $this->tglDemobilisasi = $post["tglDemobilisasi"];
        $this->jamMasuk = $post["jamMasuk"];
        $this->latitude = $post["latitude"];
        $this->longitude = $post["longitude"];
        
        if (!empty($_FILES["image"]["name"])) {
        $this->image = $this->_uploadImage();
            } else {
        $this->image = $post["old_image"];
            }
        $this->db->update($this->_table, $this, array('user_id' => $post['id']));
            }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("user_id" => $id));
    }

    private function _uploadImage()
{
    $config['upload_path']          = './upload/image/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->user_id;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }

    print_r($this->upload->display_errors());
    return "default.png";
}

private function _deleteImage($id)
    {
    $user = $this->getById($id);
    if ($user->image != "default.jpg") {
        $filename = explode(".", $user->image)[0];
        return array_map('unlink', glob(FCPATH."upload/form/$filename.*"));
    }
}
}