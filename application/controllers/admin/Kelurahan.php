<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kelurahan_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
           // if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["kelurahan"] = $this->kelurahan_model->getAll();
        $this->load->view("admin/kelurahan/list", $data);
    }

    public function add()
    {
        $kelurahan = $this->kelurahan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelurahan->rules());

        if ($validation->run()) {
            $kelurahan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kelurahan/new_form");
    }

    public function edit($id_kel = null)
    {
        if (!isset($id_kel)) redirect('admin/kelurahan');
       
        $kelurahan = $this->kelurahan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelurahan->rules());

        if ($validation->run()) {
            $kelurahan->update();
            $this->session->set_flashdata('success', 'kelurahan Berhasil diupdate');
        }

        $data["kelurahan"] = $kelurahan->getById($id_kel);
        if (!$data["kelurahan"]) show_404();
        
        $this->load->view("admin/kelurahan/edit_form", $data);
    }

    public function delete($id_kel=null)
    {
        if (!isset($id_kel)) show_404();
        
        if ($this->kelurahan_model->delete($id_kel)) {
            redirect(site_url('admin/kelurahan'));
        }
    }
}