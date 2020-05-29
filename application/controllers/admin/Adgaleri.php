<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adgaleri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("adgaleri_model");
        $this->load->library('form_validation');
       // $this->load->model("user_model");
		//if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["adgaleri"] = $this->adgaleri_model->getAll();
        $this->load->view("admin/adgaleri/list", $data);
    }

    public function add()
    {
        $galeri = $this->adgaleri_model;
        $validation = $this->form_validation;
        $validation->set_rules($galeri->rules());

        if ($validation->run()) {
            $galeri->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/adgaleri/new_form");
    }

    public function edit($id_galeri = null)
    {
        if (!isset($id_galeri)) redirect('admin/adgaleri');
       
        $galeri = $this->adgaleri_model;
        $validation = $this->form_validation;
        $validation->set_rules($galeri->rules());

        if ($validation->run()) {
            $galeri->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["adgaleri"] = $galeri->getById($id_galeri);
        if (!$data["adgaleri"]) show_404();
        
        $this->load->view("admin/adgaleri/edit_form", $data);
    }

    public function delete($id_galeri=null)
    {
        if (!isset($id_galeri)) show_404();
        
        if ($this->adgaleri_model->delete($id_galeri)) {
            redirect(site_url('admin/adgaleri'));
        }
    }
}
