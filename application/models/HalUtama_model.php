<?php 
	class HalUtama_model extends CI_Model{
		public function __construct()
	    {
		    $this->load->database();
        }
        
	    public function cariUsaha()
	    {
            $cari = $this->input->GET('cari', TRUE);
            $data = $this->db->query("SELECT * from usaha where nama_ush like '%$cari%' ");
            return $data->result();
	    }
	}