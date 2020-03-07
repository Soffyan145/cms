<?php

class M_cms extends CI_model
{
    public function get_data($table)
    {
        return $this->db->get($table);
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
    public function count_news()
    {
        $h = $this->db->where('status', '1');
        $query = $this->db->get('news');
        if ($query->num_rows() > 0 and $h) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function count_testimonial()
    {
        $h = $this->db->where('status', '1');
        $query = $this->db->get('testimonial');
        if ($query->num_rows() > 0 and $h) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function count_team()
    {
        $query = $this->db->get('team');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function count_partner()
    {
        $query = $this->db->get('partner');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
