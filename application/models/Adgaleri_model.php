<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Adgaleri_model extends CI_Model
{
    private $_table = "galeri";

    public $id_galeri;
    public $nama_gal;
    public $image = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'id_galeri',
            'label' => 'ID galeri',
            'rules' => 'required'],

            ['field' => 'nama_gal',
            'label' => 'Nama galeri',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_galeri)
    {
        return $this->db->get_where($this->_table, ["id_galeri" => $id_galeri])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_galeri = uniqid();
        $this->nama_gal = $post["nama_gal"];
		$this->image = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_galeri = $post["id_galeri"];
        $this->nama_gal = $post["nama_gal"];
		
		
		if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}

        $this->db->update($this->_table, $this, array('id_galeri' => $post['id_galeri']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_galeri" => $id));
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/adgaleri/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->id_galeri;
		$config['overwrite']			= true;
		$config['max_size']             = 2048; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$galeri = $this->getById($id);
		if ($galeri->image != "default.jpg") {
			$filename = explode(".", $galeri->image)[0];
			return array_map('unlink', glob(FCPATH."upload/adgaleri/$filename.*"));
		}
	}

}
