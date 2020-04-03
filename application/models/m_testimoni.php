<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_testimoni extends CI_Model
{
    private $table = "tb_testimoni";
    public $id;
    public $title;
    public $description;
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
        return $this->db->query("SELECT * FROM $this->table LEFT JOIN tb_admin ON $this->table.updated_by = tb_admin.id ")->result();
        // $this->db->select($this->table . '.id, ' . $this->table . '.title, ' . $this->table . '.description, ' . $this->table . '.created_date, ' . $this->table . '.updated_date, tb_admin.name');
        // $this->db->from($this->table);
        // $this->db->join('tb_admin', $this->table . '.updated_by = tb_admin.id');
        // return $this->db->get()->result();
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
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
