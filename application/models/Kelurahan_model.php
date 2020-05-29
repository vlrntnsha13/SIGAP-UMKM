<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan_model extends CI_Model
{
    private $_table = "kelurahan";

    public $id_kel;
    public $nama_kel;
    public $id_kec;
    public $nama_kec;

    public function rules(){
        return [
            ['field' => 'id_kel',
            'label'=> 'ID kelurahan',
            'rules' => 'required'],

            ['field' => 'nama_kel',
            'label'=> 'Nama kelurahan',
            'rules' => 'required'],

            ['field' => 'nama_kec',
            'label'=> 'Nama Kecamatan',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        $this->db->select('id_kel, nama_kel, nama_kec');
        $this->db->from('kelurahan');
        $this->db->join('kecamatan','kecamatan.id_kec=kelurahan.id_kec');
        $query = $this->db->get();
        return $query->result();
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_kel)
    {
        return $this->db->get_where($this->_table, ["id_kel" => $id_kel])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kel = $post["id_kel"];
        $this->nama_kel = $post["nama_kel"];
        $this->id_kec = $post["id_kec"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kel = $post["id_kel"];
        $this->nama_kel = $post["nama_kel"];
        $this->id_kec = $post["id_kec"];
        return $this->db->update($this->_table, $this, array('id_kel' => $post['id_kel']));
    }

    public function delete($id_kel)
    {
        return $this->db->delete($this->_table, array("id_kel" => $id_kel));
    }

    public function tampil() {
        $this->db->select('nama_kec');
        $this->db->from('kelurahan');
        $this->db->join('kecamatan','kecamatan.id_kec=kelurahan.id_kec');
        $query = $this->db->get();
        return $query->result();
       }

}