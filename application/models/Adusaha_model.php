<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Adusaha_model extends CI_Model
{
    private $_table = "usaha";

    public $id_usaha;
    public $nama_ush;
    public $alamat_ush;
    public $ket_ush;
    public $longitude;
    public $latitude;
    public $id_member;
    public $nama_mmber;
    public $id_kel;
    public $nama_kel;
    public $id_kec;
    public $nama_kec;
    public $id_kat;
    public $nama_kat;

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
            'label'=> 'Nama Member',
            'rules' => 'required'],

            ['field' => 'id_kel',
            'label'=> 'Nama Kelurahan',
            'rules' => 'required'],

            ['field' => 'id_kec',
            'label'=> 'Nama Kecamatan',
            'rules' => 'required'],
            
            ['field' => 'id_kat',
            'label'=> 'Nama Kategori',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $this->db->select('id_usaha, nama_ush, alamat_ush, ket_ush, longitude, latitude, nama_member, nama_kel, nama_kec, nama_kat');
        $this->db->from('usaha');
        $this->db->join('member','member.id_member=usaha.id_member');
        $this->db->join('kelurahan','kelurahan.id_kel=usaha.id_kel');
        $this->db->join('kecamatan','kecamatan.id_kec=usaha.id_kec');
        $this->db->join('kategori','kategori.id_kat=usaha.id_kat');
        $query = $this->db->get();
        return $query->result();
    }


    function getAllKategori(){
		
        return $this->db->from('kategori')
            ->get()
            ->result();	 
    }
    
    function getAllKelurahan(){
		
        return $this->db->from('kelurahan')
            ->get()
            ->result();	
	}
    
    function getAllKecamatan(){
		
        return $this->db->from('kecamatan')
            ->get()
            ->result();	
    }
    
    function getAllMember(){
		
        return $this->db->from('member')
            ->get()
            ->result();	
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
        $this->id_member = $post["id_member"];
        $this->id_kel = $post["id_kel"];
        $this->id_kec = $post["id_kec"];
        $this->id_kat = $post["kategori"];
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
        $this->id_member = $post["member"];
        $this->id_kel = $post["kelurahan"];
        $this->id_kec = $post["kecamatan"];
        $this->id_kat = $post["kategori"];
        return $this->db->update($this->_table, $this, array('id_usaha' => $post['id_usaha']));
    }

    public function delete($id_usaha)
    {
        return $this->db->delete($this->_table, array("id_usaha" => $id_usaha));
    }

}