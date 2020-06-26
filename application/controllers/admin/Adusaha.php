<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Adusaha extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("adusaha_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["adusaha"] = $this->adusaha_model->getAll();
        $this->load->view("admin/adusaha/list", $data);
    }

    function get_kategori(){
        $id_kat=$this->input->post('id_kat');
        $data=$this->adusaha_model->kategori($id_kat);
        echo json_encode($data);
    }

    public function add()
    {
        $usaha = $this->adusaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($usaha->rules());

        
            $usaha->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        $data['dropdwn'] = $this->adusaha_model->getAllKategori();
        $data['dropdwn1'] = $this->adusaha_model->getAllKecamatan();
        $data['dropdwn2'] = $this->adusaha_model->getAllKelurahan();
        $data['dropdwn3'] = $this->adusaha_model->getAllMember();

        $this->load->view("admin/adusaha/new_form",$data);
    }

    public function edit($id_usaha = null)
    {
        if (!isset($id_usaha)) redirect('admin/adusaha');
       
        $usaha = $this->adusaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($usaha->rules());

        if ($validation->run()) {
            $usaha->update();
            $this->session->set_flashdata('success', 'usaha Berhasil diupdate');
        }

        $data["adusaha"] = $usaha->getById($id_usaha);
        if (!$data["adusaha"]) show_404();
        $data['dropdwn'] = $this->adusaha_model->getAllKategori();
        
        $this->load->view("admin/adusaha/edit_form", $data);
    }

    public function delete($id_usaha=null)
    {
        if (!isset($id_usaha)) show_404();
        
        if ($this->adusaha_model->delete($id_usaha)) {
            redirect(site_url('admin/adusaha'));
        }
    }

    public function export()
     {
          $semua_usaha = $this->adusaha_model->getAllData()->result();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'ID Usaha')
                      ->setCellValue('B1', 'Nama Usaha')
                      ->setCellValue('C1', 'Alamat Usaha')
                      ->setCellValue('D1', 'Keterangan Usaha');

          $kolom = 2;

          foreach($semua_usaha as $usaha) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $usaha->id_usaha)
                           ->setCellValue('B' . $kolom, $usaha->nama_ush)
                           ->setCellValue('C' . $kolom, $usaha->alamat_ush)
                           ->setCellValue('D' . $kolom, $usaha->ket_ush);

               $kolom++;
          }

          $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
	    header('Content-Disposition: attachment;filename="Laporanumkm.xlsx"');
	    header('Cache-Control: max-age=0');

	  $writer->save('php://output');
     }
}