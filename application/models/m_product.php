<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_product extends CI_Model
{
    private $table = "tb_product";

    public $id;
    public $name_product;
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
                'field' => 'name_product',
                'label' => 'Name Product',
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
        return $this->db->query("SELECT * FROM $this->table LEFT JOIN tb_admin ON $this->table.updated_by = tb_admin.id")->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->created_date = $post["created_date"];
        $this->created_by = $post["created_by"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->name_product = $post["name_product"];
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
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
        $this->name_product = $post["name_product"];
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
        $this->status = $post["status"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
