<?php

class Blog extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/frontend/header');
        $this->load->view('layout/frontend/topbar');
        $this->load->view('pages/frontend/blog');
        $this->load->view('layout/frontend/footer');
    }
}
