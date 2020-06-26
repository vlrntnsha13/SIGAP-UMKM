<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Tek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tek_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["tek"] = $this->tek_model->getAll();
        $this->load->view("kategori/tek", $data);
    }

    
}