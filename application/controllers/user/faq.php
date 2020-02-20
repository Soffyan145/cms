<?php

class Faq extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/frontend/header');
        $this->load->view('layout/frontend/topbar');
        $this->load->view('pages/frontend/faq');
        $this->load->view('layout/frontend/footer');
    }
}
