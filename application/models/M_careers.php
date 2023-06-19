<?php

class M_careers extends CI_Model
{
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function update_data($field, $where, $data, $table)
    {
        $this->db->where($field, $where);
        $this->db->update($table, $data);
    }

    function delete_data($field, $where, $table)
    {
        $this->db->where($field, $where);
        $this->db->delete($table);
    }
}
