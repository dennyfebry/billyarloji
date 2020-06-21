<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_category extends CI_Model
{
    private $table = "tb_category";
    public $id;
    public $category;
    public $created_date;
    public $created_by;
    public $updated_date;
    public $updated_by;

    public function rules()
    {
        return [
            [
                'field' => 'category',
                'label' => 'Category',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select($this->table . '.*, tb_admin.name');
        $this->db->from($this->table);
        $this->db->join('tb_admin', $this->table . '.updated_by = tb_admin.id', 'left');
        $this->db->order_by($this->table . '.category', 'ASC');
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
        $this->category = $post["category"];
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
        $this->category = $post["category"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    public function getMenu()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result();
    }
}
