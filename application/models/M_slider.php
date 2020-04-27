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
        $this->db->select($this->table . '.id, ' . $this->table . '.title, ' . $this->table . '.description, ' . $this->table . '.images, ' . $this->table . '.updated_date, ' . $this->table . '.updated_by,' . $this->table . '.status, tb_admin.name');
        $this->db->from($this->table);
        $this->db->join('tb_admin', $this->table . '.updated_by = tb_admin.id');
        return $this->db->get()->result();
    }

    public function count()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->num_rows();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        $this->images = $this->_uploadImage();
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
        if (!empty($_FILES["images"]["name"])) {
            $this->images = $this->_uploadImage();
        } else {
            $this->images = $post["old_images"];
        }
        $this->status = $post["status"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/slider/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->title;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 200;
        // $config['max_height']           = 200;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/product/$filename.*"));
        }
    }

    public function getSlider()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }
}