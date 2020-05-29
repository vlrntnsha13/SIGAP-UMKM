
<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
 
  function index(){ // Setting Halaman Awal Setelah Login
    $this->load->view('halUtama');
  }
 
  function admin(){
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/overview');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
 
  }
 
  function berita(){
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/berita/add');
      $this->load->view('admin/berita');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
  function kategori(){
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/kategori/add');
      $this->load->view('admin/kategori');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  function kecamatan(){
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/kecamatan/add');
      $this->load->view('admin/kecamatan');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function kelurahan(){
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/kelurahan/add');
      $this->load->view('admin/kelurahan');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  
  function adusaha(){
    if($this->session->userdata('akses')=='1'){
      $this->load->view('admin/adusaha/add');
      $this->load->view('admin/adusaha');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function mgaleri(){
    if($this->session->userdata('akses')=='2'){
      $this->load->view('member/mgaleri/add');
      $this->load->view('member/mgaleri');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function musaha(){
    if($this->session->userdata('akses')=='2'){
      $this->load->view('member/musaha/add');
      $this->load->view('member/musaha');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}