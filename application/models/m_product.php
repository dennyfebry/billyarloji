<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    private $table = "tb_product";

    public $id;
    public $name;
    public $description;
    public $price;
    public $discount;
    public $images = "default.jpg";
    public $created_date;
    public $created_by;
    public $updated_date;
    public $updated_by;
    public $status;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ],

            [
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'required'
            ],

            [
                'field' => 'discount',
                'label' => 'Discount',
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
        // return $this->db->query("SELECT * FROM $this->table LEFT JOIN tb_admin ON $this->table.updated_by = tb_admin.id")->result();
        $this->db->select($this->table . '.id, ' . $this->table . '.name AS name_product, ' . $this->table . '.description, ' . $this->table . '.price, ' . $this->table . '.discount, ' . $this->table . '.images, ' . $this->table . '.created_date, ' . $this->table . '.created_by, ' . $this->table . '.updated_date, ' . $this->table . '.updated_by,' . $this->table . '.status, tb_admin.name');
        $this->db->from($this->table);
        $this->db->join('tb_admin', $this->table . '.updated_by = tb_admin.id');
        return $this->db->get()->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->created_date = $post["created_date"];
        $this->created_by = $post["created_by"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->name = $post["name"];
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
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
        $this->name = $post["name"];
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
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
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 200;
        // $config['max_height']           = 200;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            return $this->upload->data("file_name");
        }
        // print_r($this->upload->display_errors());
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
}
