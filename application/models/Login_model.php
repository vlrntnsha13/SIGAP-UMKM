<?php
class Login_model extends CI_Model{
    //cek username dan password admin
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek username dan password member
    function auth_member($username,$password){
        $query=$this->db->query("SELECT * FROM member WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
}