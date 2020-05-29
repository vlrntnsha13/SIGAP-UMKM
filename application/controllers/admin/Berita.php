<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("berita_model");
        $this->load->library('form_validation');
        $this->load->library('upload');
        // $this->load->model("user_model");
        // if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

//     function simpan_post(){
//         $config['upload_path'] = './upload/images/'; //path folder
//         $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
//         $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
//         $this->upload->initialize($config);
//         if(!empty($_FILES['filefoto']['name'])){
//             if ($this->upload->do_upload('filefoto')){
//                 $gbr = $this->upload->data();
//                 //Compress Image
//                 $config['image_library']='gd2';
//                 $config['source_image']='./upload/images/berita/'.$gambar['file_name'];
//                 $config['create_thumb']= FALSE;
//                 $config['maintain_ratio']= FALSE;
//                 $config['quality']= '60%';
//                 $config['width']= 710;
//                 $config['height']= 420;
//                 $config['new_image']= './upload/images/berita/'.$gambar['file_name'];
//                 $this->load->library('image_lib', $config);
//                 $this->image_lib->resize();
 
//                 $gambar=$gbr['file_name'];
//                 $judul=$this->input->post('judul');
//                 $berita=$this->input->post('berita');
 
//                 $this->berita->save($judul,$berita,$gambar);
//                 redirect('post_berita/lists');
//         }else{
//             redirect('post_berita');
//         }
//     }else{
//         redirect('post_berita');
//     }
             
// }

// function lists(){
//     $x['data']=$this->m_berita->get_all_berita();
//     $this->load->view('v_post_list',$x);
// }

// function view(){
//     $kode=$this->uri->segment(3);
//     $x['data']=$this->m_berita->get_berita_by_kode($kode);
//     $this->load->view('v_post_view',$x);
// }

    public function index()
    {
        $data["berita"] = $this->berita_model->getAll();
        $this->load->view("admin/berita/list", $data);
    }

    public function add()
    {
        $berita = $this->berita_model;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/berita/new_form");
    }

    public function edit($id_berita = null)
    {
        if (!isset($id_berita)) redirect('admin/berita');
       
        $berita = $this->berita_model;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->update();
            $this->session->set_flashdata('success', 'berita Berhasil diupdate');
        }

        $data["berita"] = $berita->getById($id_berita);
        if (!$data["berita"]) show_404();
        
        $this->load->view("admin/berita/edit_form", $data);
    }

    public function delete($id_berita=null)
    {
        if (!isset($id_berita)) show_404();
        
        if ($this->berita_model->delete($id_berita)) {
            redirect(site_url('admin/berita'));
        }
    }
}