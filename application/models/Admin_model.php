<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $_table = "admin";

    public $id_admin;
    public $nama_admin;
    public $email_admin;
    public $nohp_admin;
    public $password;

    public function rules(){
        return [
            ['field' => 'id_admin',
            'label'=> 'ID admin',
            'rules' => 'required'],

            ['field' => 'nama_admin',
            'label'=> 'Nama admin',
            'rules' => 'required'],

            ['field' => 'email_admin',
            'label'=> 'Email admin',
            'rules' => 'required'],

            ['field' => 'nohp_admin',
            'label'=> 'Nohp admin',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label'=> 'Password',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
        //$conn = mysql_connect("localhost","root","sigapumkm");
        //mysql_select_db("test", $conn);
       // $sql = "select * from usaha u inner join member m on u.id_member=m.id_member";
       //1 $result = mysql_query($sql);
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_admin)
    {
        return $this->db->get_where($this->_table, ["id_admin" => $id_admin])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->nama_admin = $post["nama_admin"];
        $this->email_admin = $post["email_admin"];
        $this->nohp_admin = $post["nohp_admin"];
        $this->password = $post["password"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->nama_admin = $post["nama_admin"];
        $this->email_admin = $post["email_admin"];
        $this->nohp_admin = $post["nohp_admin"];
        $this->password = $post["password"];
        return $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
    }

    public function delete($id_admin)
    {
        return $this->db->delete($this->_table, array("id_admin" => $id_admin));
    }

}
