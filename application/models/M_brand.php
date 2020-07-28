<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_brand extends CI_Model
{
    private $table = "tb_brand";
    public $id;
    public $category_id;
    public $brand;
    public $created_date;
    public $created_by;
    public $updated_date;
    public $updated_by;

    public function rules()
    {
        return [
            [
                'field' => 'brand',
                'label' => 'Brand',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select($this->table . '.*, tb_category.category, tb_admin.name');
        $this->db->from($this->table);
        $this->db->join('tb_admin', $this->table . '.updated_by = tb_admin.id', 'left');
        $this->db->join('tb_category', $this->table . '.category_id = tb_category.id', 'left');
        $this->db->order_by('tb_category.category', 'ASC');
        $this->db->order_by($this->table . '.brand', 'ASC');
        return $this->db->get()->result();
    }

    public function count()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->num_rows();
    }

    public function getCategory()
    {
        $this->db->select('*');
        $this->db->from('tb_category');
        return $this->db->get()->result();
    }

    public function save()
    {
        $post               = $this->input->post();
        $this->created_date = $post["created_date"];
        $this->created_by   = $post["created_by"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by   = $post["updated_by"];
        $this->category_id  = $post["category_id"];
        $this->brand        = $post["brand"];
        return $this->db->insert($this->table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function update()
    {
        $post               = $this->input->post();
        $this->id           = $post["id"];
        $this->created_date = $post["created_date"];
        $this->created_by   = $post["created_by"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by   = $post["updated_by"];
        $this->category_id  = $post["category_id"];
        $this->brand        = $post["brand"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    public function getBrand($category_id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('category_id', $category_id);
        return $this->db->get()->result();
    }
}
