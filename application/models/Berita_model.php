<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    private $_table = "berita";

    public $id_berita;
    public $judul;
    public $isi;
    public $tgl_terbit;
    public $penulis;
    public $image;
    public $link;
    public $id_admin = "A01";

    public function rules(){
        return [
            ['field' => 'id_berita',
            'label'=> 'ID berita',
            'rules' => 'required'],

            ['field' => 'judul',
            'label'=> 'Nama berita',
            'rules' => 'required'],

            ['field' => 'isi',
            'label'=> 'Isi berita',
            'rules' => 'required'],

            ['field' => 'tgl_terbit',
            'label'=> 'Tanggal Terbit berita',
            'rules' => 'date'],

            ['field' => 'penulis',
            'label'=> 'Penulis berita',
            'rules' => 'required'],

            ['field' => 'link',
            'label'=> 'Link atau sumber berita']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_berita)
    {
        return $this->db->get_where($this->_table, ["id_berita" => $id_berita])->row();
    }

    function get_berita_by_kode($id_berita){
        $hsl=$this->db->query("SELECT * FROM berita WHERE id_berita='$id_berita'");
        return $hsl;
    }
 
    function get_all_berita(){
        $hsl=$this->db->query("SELECT * FROM berita ORDER BY id_berita DESC");
        return $hsl;
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_berita = $post["id_berita"];
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->tgl_terbit = $post["tgl_terbit"];
        $this->penulis = $post["penulis"];
        $this->image = $this->_uploadImage();
        $this->link = $post["link"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_berita = $post["id_berita"];
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->tgl_terbit = $post["tgl_terbit"];
        $this->penulis = $post["penulis"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}

        $this->link = $post["link"];
        return $this->db->update($this->_table, $this, array('id_berita' => $post['id_berita']));
    }

    public function delete($id_berita)
    {
        $this->_deleteImage($id_berita);
        return $this->db->delete($this->_table, array("id_berita" => $id_berita));
    }

    private function _uploadImage()
	{
		$config['upload_path']          = './upload/berita/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->id_berita;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id_berita)
	{
		$berita = $this->getById($id_berita);
		if ($berita->image != "default.jpg") {
			$filename = explode(".", $berita->image)[0];
			return array_map('unlink', glob(FCPATH."upload/berita/$filename.*"));
		}
	}

}