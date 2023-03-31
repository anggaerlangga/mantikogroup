<?php defined('BASEPATH') OR exit('No direct script access allowed');

class gallery_model extends CI_Model 
{
    // nama table
    private $_table = "gallery";

    // nama kolom di tabel
    public $gallery_id;
    public $product_id;
    public $photo;

    public function rules() {
        return [
            ['field' => 'product_id',
            'label' => 'Product ID',
            'rules' => 'required']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
        // SELECT * FROM banner
        // method ini akan mengembalikan sebuah array
    }

    public function getById($gallery_id)
    {
        return $this->db->get_where($this->_table, ["gallery_id" => $gallery_id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("gallery_id" => $id));
    }

    private function _deleteImage($id)
    {
        $gallery = $this->getById($id);
            $filename = explode(".", $gallery->photo)[0];
            return array_map('unlink', glob(FCPATH."upload/image/$filename.*"));
        
    }

}