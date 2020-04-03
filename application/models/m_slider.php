<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_slider extends CI_Model
{
    private  $table = "tb_slider";

    public $id;
    public $title;
    public $description;
    public $images = "default.jpg";
    public $updated_date;
    public $updated_by;
    public $status;

    public function rules()
    {
        return [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],

            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ],

            [
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->query("SELECT * FROM $this->table LEFT JOIN tb_admin ON $this->table.updated_by = tb_admin.id")->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        $this->status = $post["status"];
        return $this->db->insert($this->table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        $this->status = $post["status"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
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
