<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kategori_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["kategori"] = $this->kategori_model->getAll();
        $this->load->view("admin/kategori/list", $data);
    }

    public function add()
    {
        $kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kategori/new_form");
    }

    public function edit($id_kat = null)
    {
        if (!isset($id_kat)) redirect('admin/kategori');
       
        $kategori = $this->kategori_model;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->update();
            $this->session->set_flashdata('success', 'Kategori Berhasil diupdate');
        }

        $data["kategori"] = $kategori->getById($id_kat);
        if (!$data["kategori"]) show_404();
        
        $this->load->view("admin/kategori/edit_form", $data);
    }

    public function delete($id_kat=null)
    {
        if (!isset($id_kat)) show_404();
        
        if ($this->kategori_model->delete($id_kat)) {
            redirect(site_url('admin/kategori'));
        }
    }
}