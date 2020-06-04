<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["admin"] = $this->admin_model->getAll();
        $this->load->view("admin/admin/list", $data);
    }

    public function edit($id_admin = null)
    {
        if (!isset($id_admin)) redirect('admin/admin');
       
        $admin = $this->admin_model;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->update();
            $this->session->set_flashdata('success', 'Data Admin Berhasil di update');
        }

        $data["admin"] = $admin->getById($id_admin);
        if (!$data["admin"]) show_404();
        
        $this->load->view("admin/admin/edit_form", $data);
    }

    public function delete($id_admin=null)
    {
        if (!isset($id_admin)) show_404();
        
        if ($this->admin_model->delete($id_admin)) {
            redirect(site_url('admin/admin'));
        }
    }
}