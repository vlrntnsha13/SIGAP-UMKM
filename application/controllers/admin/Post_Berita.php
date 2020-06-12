<?php
class Post_berita extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->library('upload');
    }
    function index(){
        $this->load->view('v_post_news');
    }
 
    function simpan_post(){
        $config['upload_path'] = './upload/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./upload/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './upload/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $judul=$this->input->post('judul');
                $berita=$this->input->post('berita');
 
                $this->berita_model->simpan_berita($judul,$berita,$gambar);
                redirect('post_berita/lists');
        }else{
            redirect('post_berita');
        }
                      
        }else{
            redirect('post_berita');
        }
                 
    }
 
    function lists(){
        $x['data']=$this->berita_model->get_all_berita();
        $this->load->view('v_post_list',$x);
    }
 
    function view(){
        $kode=$this->uri->segment(3);
        $x['data']=$this->berita_model->get_berita_by_kode($kode);
        $this->load->view('v_post_view',$x);
    }
 
}