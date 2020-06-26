<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Et_model extends CI_Model
{
    private $_table = "usaha";

    public $id_usaha;
    public $nama_ush;
    public $alamat_ush;
    public $ket_ush;
    public $longitude;
    public $latitude;
    public $id_member;
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

            ['field' => 'id_member',
            'label'=> 'ID Member',
            'rules' => 'required'],

            ['field' => 'id_kel',
            'label'=> 'Nama Kelurahan',
            'rules' => 'required'],

            ['field' => 'id_kec',
            'label'=> 'ID Kecamatan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $this->db->select('nama_ush, alamat_ush, ket_ush, longitude, latitude, nama_member, nama_kel, nama_kec, nama_kat');
        $this->db->from('usaha');
        $this->db->join('member','member.id_member=usaha.id_member');
        $this->db->join('kelurahan','kelurahan.id_kel=usaha.id_kel');
        $this->db->join('kecamatan','kecamatan.id_kec=usaha.id_kec');
        $this->db->join('kategori','kategori.id_kat=usaha.id_kat');
        $this->db->where('nama_kat', 'Elektronik dan Gadget');
        $query = $this->db->get();
        return $query->result();
    }

}