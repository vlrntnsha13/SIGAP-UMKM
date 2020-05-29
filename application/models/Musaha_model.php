<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Musaha_model extends CI_Model
{
    private $_table = "usaha";

    public $id_usaha;
    public $nama_ush;
    public $alamat_ush;
    public $ket_ush;
    public $longitude;
    public $latitude;
    public $id_kel;
    public $id_kec;
    public $id_kat;

    public function rules(){
        return [
            ['field' => 'id_usaha',
            'label'=> 'ID usaha',
            'rules' => 'required'],

            ['field' => 'nama_ush',
            'label'=> 'Nama usaha',
            'rules' => 'required'],

            ['field' => 'alamat_ush',
            'label'=> 'Alamat usaha',
            'rules' => 'required'],

            ['field' => 'ket_ush',
            'label'=> 'Keterangan usaha',
            'rules' => 'required'],

            ['field' => 'longitude',
            'label'=> 'Longitude',
            'rules' => 'required'],
            
            ['field' => 'latitude',
            'label'=> 'Latitude',
            'rules' => 'required'],

            ['field' => 'ide_kel',
            'label'=> 'ID Kelurahan',
            'rules' => 'required'],

            ['field' => 'id_kec',
            'label'=> 'ID Kecamatan',
            'rules' => 'required'],
            
            ['field' => 'id_kat',
            'label'=> 'ID Kategori',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_usaha)
    {
        return $this->db->get_where($this->_table, ["id_usaha" => $id_usaha])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_usaha = $post["id_usaha"];
        $this->nama_ush = $post["nama_ush"];
        $this->alamat_ush = $post["alamat_ush"];
        $this->ket_ush = $post["ket_ush"];
        $this->longitude = $post["longitude"];
        $this->latitude = $post["latitude"];
        $this->id_kel = $post["id_kel"];
        $this->id_kec = $post["id_kec"];
        $this->id_kat = $post["id_kat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_usaha = $post["id_usaha"];
        $this->nama_ush = $post["nama_ush"];
        $this->alamat_ush = $post["alamat_ush"];
        $this->ket_ush = $post["ket_ush"];
        $this->longitude = $post["longitude"];
        $this->latitude = $post["latitude"];
        $this->id_kel = $post["id_kel"];
        $this->id_kec = $post["id_kec"];
        $this->id_kat = $post["id_kat"];
        return $this->db->update($this->_table, $this, array('id_usaha' => $post['id_usaha']));
    }

    public function delete($id_usaha)
    {
        return $this->db->delete($this->_table, array("id_usaha" => $id_usaha));
    }

}