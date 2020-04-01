<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_testimoni extends CI_Model
{
    var $table = "tb_testimoni";

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
}
