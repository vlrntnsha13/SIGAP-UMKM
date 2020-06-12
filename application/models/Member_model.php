<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model
{
    private $_table = "member";

    public $id_member;
    public $nama_member;
    public $email_member;
    public $nohp_member;
    public $alamat_member;
    public $password;
    public $id_admin;

    public function rules(){
        return [
            ['field' => 'id_member',
            'label'=> 'ID member',
            'rules' => 'required'],

            ['field' => 'nama_member',
            'label'=> 'Nama member',
            'rules' => 'required'],

            ['field' => 'email_member',
            'label'=> 'Email member',
            'rules' => 'required'],

            ['field' => 'nohp_member',
            'label'=> 'Nohp member',
            'rules' => 'required'],

            ['field' => 'alamat_member',
            'label'=> 'Alamat member',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label'=> 'Password',
            'rules' => 'required'],

            ['field' => 'id_admin',
            'label'=> 'ID Admin',
            'rules' => 'required'],
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_member)
    {
        return $this->db->get_where($this->_table, ["id_member" => $id_member])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_member = $post["id_member"];
        $this->nama_member = $post["nama_member"];
        $this->email_member = $post["email_member"];
        $this->nohp_member = $post["nohp_member"];
        $this->alamat_member = $post["alamat_member"];
        $this->password = $post["password"];
        $this->id_admin = $post["id_admin"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_member = $post["id_member"];
        $this->nama_member = $post["nama_member"];
        $this->email_member = $post["email_member"];
        $this->nohp_member = $post["nohp_member"];
        $this->alamat_member = $post["alamat_member"];
        $this->password = $post["password"];
        $this->id_admin = $post["id_admin"];
        return $this->db->update($this->_table, $this, array('id_member' => $post['id_member']));
    }

    public function delete($id_member)
    {
        return $this->db->delete($this->_table, array("id_member" => $id_member));
    }

}
