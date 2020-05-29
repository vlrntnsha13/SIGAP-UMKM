<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_model extends CI_Model
{
    private $_table = "Kecamatan";

    public $id_kec;
    public $nama_kec;

    public function rules(){
        return [
            ['field' => 'id_kec',
            'label'=> 'ID Kecamatan',
            'rules' => 'required'],

            ['field' => 'nama_kec',
            'label'=> 'Nama Kecamatan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_kec)
    {
        return $this->db->get_where($this->_table, ["id_kec" => $id_kec])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kec = $post["id_kec"];
        $this->nama_kec = $post["nama_kec"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kec = $post["id_kec"];
        $this->nama_kec = $post["nama_kec"];
        return $this->db->update($this->_table, $this, array('id_kec' => $post['id_kec']));
    }

    public function delete($id_kec)
    {
        return $this->db->delete($this->_table, array("id_kec" => $id_kec));
    }

}