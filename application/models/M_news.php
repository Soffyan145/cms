<?php

class M_news extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function get_news($limit, $start)
    {
        $this->db->where("status", "1");
        return $this->db->get('news', $limit, $start)->result_array();
    }
    public function get_news_pending($limit, $start)
    {
        $this->db->where("status", "0");
        return $this->db->get('news', $limit, $start)->result_array();
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function take_id_news($id)
    {
        $final = $this->db->where('id', $id)->get('news');
        if ($final->num_rows() > 0) {
            return $final->result();
        } else {
            return false;
        }
    }
    public function count_news()
    {
        return $this->db->get('news')->num_rows();
    }
}
