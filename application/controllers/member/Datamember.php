<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datamember extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("datamember_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["datamember"] = $this->datamember_model->getAll();
        $this->load->view("member/datamember/list", $data);
    }

    function get_admin(){
        $id_kat=$this->input->post('id_admin');
        $data=$this->datamember_model->admin($id_admin);
        echo json_encode($data);
    }

    public function edit($id_member = null)
    {
        if (!isset($id_member)) redirect('member/datamember');
       
        $datamember = $this->datamember_model;
        $validation = $this->form_validation;
        $validation->set_rules($datamember->rules());

        if ($validation->run()) {
            $datamember->update();
            $this->session->set_flashdata('success', 'berita Berhasil diupdate');
        }

        $data["datamember"] = $datamember->getById($id_member);
        if (!$data["datamember"]) show_404();
        
        $data['dropdwn'] = $this->datamember_model->getAllAdmin();
        
        $this->load->view("member/datamember/edit_form", $data);
    }
}