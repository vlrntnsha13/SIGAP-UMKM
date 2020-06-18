<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
            $this->session->set_flashdata('success', 'Data Member berhasil tersimpan dan email telah terkirim');


        }
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.mailtrap.io';
        $config['smtp_user'] = '72e4d5231f8844';
        $config['smtp_pass'] = '022f9df3b0e9dc';
        $config['smtp_port'] = 2525;
        $config['newline'] = "\r\n";
        
        $this->load->library('email', $config);

        $this->email->from('no-reply@sigapumkm.com', 'SIGaP UMKM');
        $this->email->to('gracehutabarat-5fc1b5@inbox.mailtrap.io');
        $this->email->subject('Validasi Akun');
        $this->email->message('Klik button Active untuk mengaktifkan Akun Anda. <a href="http://localhost/sigapumkm/index.php/member">AKTIF</a>');
        
        //$data['dropdwn'] = $this->member_model->getAllAdmin();
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
            $this->session->set_flashdata('success', 'Data Member Berhasil diupdate');
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

    public function export()
     {
          $semua_member = $this->member_model->getAllData()->result();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'ID Member')
                      ->setCellValue('B1', 'Nama Member')
                      ->setCellValue('C1', 'Email Member')
                      ->setCellValue('D1', 'Nohp Member')
                      ->setCellValue('E1', 'Alamat Member');

          $kolom = 2;

          foreach($semua_member as $member) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $member->id_member)
                           ->setCellValue('B' . $kolom, $member->nama_member)
                           ->setCellValue('C' . $kolom, $member->email_member)
                           ->setCellValue('D' . $kolom, $member->nohp_member)
                           ->setCellValue('E' . $kolom, $member->alamat_member);

               $kolom++;
          }

          $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
	    header('Content-Disposition: attachment;filename="Laporanmember.xlsx"');
	    header('Cache-Control: max-age=0');

	  $writer->save('php://output');
     }

}