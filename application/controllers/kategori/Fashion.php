<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Fashion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("fashion_model");
        $this->load->library('form_validation');
        //$this->load->model("user_model");
        //if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["fashion"] = $this->fashion_model->getAll();
        $this->load->view("kategori/fashion", $data);
    }

    
}