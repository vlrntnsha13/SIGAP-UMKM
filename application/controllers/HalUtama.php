<?php

class HalUtama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('halUtama_model');
	}
 
	public function cari() 
	{
		$this->load->view('search');
	}
 
	public function hasil()
	{
		$data2['cari'] = $this->halUtama_model->cariUsaha();
		$this->load->view('result', $data2);
	}

	public function usaha_json()
	{
		$data3=$this->db->get('usaha')->result();
		echo json_encode($data3);
	}
	
}