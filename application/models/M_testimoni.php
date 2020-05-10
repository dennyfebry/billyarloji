<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_testimoni extends CI_Model
{
    private $table = "tb_testimoni";
    public $id;
    public $title;
    public $description;
    public $images;
    public $created_date;
    public $created_by;
    public $updated_date;
    public $updated_by;

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
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select($this->table . '.id, ' . $this->table . '.title, ' . $this->table . '.description, ' . $this->table . '.images, ' . $this->table . '.created_date, ' . $this->table . '.updated_date, tb_admin.name');
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
        $this->created_date = $post["created_date"];
        $this->created_by = $post["created_by"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        $this->images = $this->_uploadImage();
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
        $this->created_date = $post["created_date"];
        $this->created_by = $post["created_by"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        if (!empty($_FILES["images"]["name"])) {
            $this->images = $this->_uploadImage();
        } else {
            $this->images = $post["old_images"];
        }
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/testimoni/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->title;
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 1MB

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
            return array_map('unlink', glob(FCPATH . "upload/testimoni/$filename.*"));
        }
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
