<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_footer extends CI_Model
{
    private $table = "tb_footer";
    public $id;
    public $mark;
    public $title;
    public $description;
    public $link;
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
        return $this->db->query("SELECT * FROM $this->table")->result();
    }

    public function count()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->num_rows();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function updateAbout()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->mark = $post["mark"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function updateStore()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->mark = $post["mark"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function updateBuy()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->mark = $post["mark"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function getSocialMedia()
    {
        $this->db->select($this->table . '.id, ' . $this->table . '.title, ' . $this->table . '.description, ' . $this->table . '.link, ' . $this->table . '.updated_date, tb_admin.name');
        $this->db->from($this->table);
        $this->db->join('tb_admin', $this->table . '.updated_by = tb_admin.id');
        $this->db->where($this->table . '.mark =', 'social');
        return $this->db->get()->result();
    }

    public function saveSocial()
    {
        $post = $this->input->post();
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->mark = $post["mark"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        $this->link = $post["link"];
        return $this->db->insert($this->table, $this);
    }

    public function updateSocial()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->updated_date = $post["updated_date"];
        $this->updated_by = $post["updated_by"];
        $this->mark = $post["mark"];
        $this->title = $post["title"];
        $this->description = $post["description"];
        $this->link = $post["link"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function deleteSocial($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
