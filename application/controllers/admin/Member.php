<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("member_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["member"] = $this->member_model->getAll();
        $this->load->view("admin/member/list", $data);
    }

    function get_admin(){
        $id_kat=$this->input->post('id_admin');
        $data=$this->member_model->admin($id_admin);
        echo json_encode($data);
    }

    public function add()
    {
        $member = $this->member_model;
        $validation = $this->form_validation;
        $validation->set_rules($member->rules());

        if ($validation->run()) {
            $member->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
        $data['dropdwn'] = $this->member_model->getAllAdmin();
        $this->load->view("admin/member/new_form");
    }

    public function edit($id_member = null)
    {
        if (!isset($id_member)) redirect('admin/member');
       
        $member = $this->member_model;
        $validation = $this->form_validation;
        $validation->set_rules($member->rules());

        if ($validation->run()) {
            $member->update();
            $this->session->set_flashdata('success', 'berita Berhasil diupdate');
        }

        $data["member"] = $member->getById($id_member);
        if (!$data["member"]) show_404();
        
        $data['dropdwn'] = $this->member_model->getAllAdmin();
        
        $this->load->view("admin/member/edit_form", $data);
    }

    public function delete($id_member=null)
    {
        if (!isset($id_member)) show_404();
        
        if ($this->member_model->delete($id_member)) {
            redirect(site_url('admin/member'));
        }
    }
}