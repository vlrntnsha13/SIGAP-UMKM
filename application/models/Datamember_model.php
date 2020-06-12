<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datamember_model extends CI_Model
{
    private $_table = "member";

    public $id_member;
    public $nama_member;
    public $email_member;
    public $nohp_mmeber;
    public $alamat_member;
    public $username;
    public $password;
    public $id_admin;
    public $nama_admin;

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

            ['field' => 'username',
            'label'=> 'username member',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label'=> 'Password',
            'rules' => 'required'],

            ['field' => 'nama_admin',
            'label'=> 'Nama Admin',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
        $this->db->select('id_member, nama_member, email_member, nohp_member, alamat_member, member.username, member.password, nama_admin');
        $this->db->from('member');
        $this->db->join('admin','admin.id_admin=member.id_admin');
        $query = $this->db->get();
        return $query->result();
    }

    function getAllAdmin(){
		
        return $this->db->from('admin')
            ->get()
            ->result();	
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
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->id_admin = $post["id_admin"];
        $this->send();
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
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->id_admin = $post["id_admin"];
        return $this->db->update($this->_table, $this, array('id_member' => $post['id_member']));
    }
}
