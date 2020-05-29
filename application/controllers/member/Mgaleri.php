<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mgaleri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mgaleri_model");
        $this->load->library('form_validation');
       // $this->load->model("user_model");
		//if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["mgaleri"] = $this->mgaleri_model->getAll();
        $this->load->view("member/mgaleri/list", $data);
    }

    public function add()
    {
        $galeri = $this->mgaleri_model;
        $validation = $this->form_validation;
        $validation->set_rules($galeri->rules());

        if ($validation->run()) {
            $galeri->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("member/mgaleri/new_form");
    }

    public function edit($id_galeri = null)
    {
        if (!isset($id_galeri)) redirect('member/mgaleri');
       
        $galeri = $this->mgaleri_model;
        $validation = $this->form_validation;
        $validation->set_rules($galeri->rules());

        if ($validation->run()) {
            $galeri->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["mgaleri"] = $galeri->getById($id_galeri);
        if (!$data["mgaleri"]) show_404();
        
        $this->load->view("member/mgaleri/edit_form", $data);
    }

    public function delete($id_galeri=null)
    {
        if (!isset($id_galeri)) show_404();
        
        if ($this->adgaleri_model->delete($id_galeri)) {
            redirect(site_url('member/mgaleri'));
        }
    }
}
