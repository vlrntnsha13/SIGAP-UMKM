<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "kategori";

    public $id_kat;
    public $nama_kat;

    public function rules(){
        return [
            ['field' => 'id_kat',
            'label'=> 'ID Kategori',
            'rules' => 'required'],

            ['field' => 'nama_kat',
            'label'=> 'Nama Kategori',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_kat)
    {
        return $this->db->get_where($this->_table, ["id_kat" => $id_kat])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kat = $post["id_kat"];
        $this->nama_kat = $post["nama_kat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kat = $post["id_kat"];
        $this->nama_kat = $post["nama_kat"];
        return $this->db->update($this->_table, $this, array('id_kat' => $post['id_kat']));
    }

    public function delete($id_kat)
    {
        return $this->db->delete($this->_table, array("id_kat" => $id_kat));
    }

}