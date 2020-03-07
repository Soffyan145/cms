<?php

class Blog extends CI_Controller
{
    public function index()
    {
        $data['newses'] = $this->db->query("SELECT * FROM news INNER JOIN category ON news.name_category=category.name_category where status='1'")->result();
        $this->load->view('layout/frontend/header');
        $this->load->view('layout/frontend/topbar');
        $this->load->view('pages/frontend/blog', $data);
        $this->load->view('layout/frontend/footer');
    }
    public function detail($id)
    {
        $data['detail'] = $this->M_news->take_id_news($id);
        $data['newses'] = $this->db->query("SELECT * FROM news INNER JOIN category ON news.name_category=category.name_category")->result();
        $data['categories'] = $this->db->query("SELECT * FROM category");
        $this->load->view('layout/frontend/header');
        $this->load->view('layout/frontend/topbar');
        $this->load->view('pages/frontend/detail', $data);
        $this->load->view('layout/frontend/footer');
    }
}
