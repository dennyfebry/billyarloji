<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_slider extends CI_Model
{
    private  $table = "tb_slider";

    public $id;
    public $title;
    public $description;
    public $images = "default.jpg";
    public $description;
    public $updated_date;
    public $updated_by;

    public function list()
    {
        $data = $this->db->query("SELECT * FROM $this->table");
        return $data->result_array();
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function edit($id)
    {
        $this->db->where("id", $id);
        return $this->db->get($this->table);
    }

    function update($id, $data)
    {
        $this->db->where("id", $id);
        $this->db->update($this->table, $data);
    }

    function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete($this->table);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
