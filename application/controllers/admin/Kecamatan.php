<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kecamatan_model");
        $this->load->library('form_validation');
       // $this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["kecamatan"] = $this->kecamatan_model->getAll();
        $this->load->view("admin/kecamatan/list", $data);
    }

    public function add()
    {
        $kecamatan = $this->kecamatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kecamatan->rules());

        if ($validation->run()) {
            $kecamatan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kecamatan/new_form");
    }

    public function edit($id_kec = null)
    {
        if (!isset($id_kec)) redirect('admin/kecamatan');
       
        $kecamatan = $this->kecamatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($kecamatan->rules());

        if ($validation->run()) {
            $kecamatan->update();
            $this->session->set_flashdata('success', 'kecamatan Berhasil diupdate');
        }

        $data["kecamatan"] = $kecamatan->getById($id_kec);
        if (!$data["kecamatan"]) show_404();
        
        $this->load->view("admin/kecamatan/edit_form", $data);
    }

    public function delete($id_kec=null)
    {
        if (!isset($id_kec)) show_404();
        
        if ($this->kecamatan_model->delete($id_kec)) {
            redirect(site_url('admin/kecamatan'));
        }
    }
}