<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['count_team']            = $this->M_cms->count_team();
        $data['count_news']            = $this->M_cms->count_news();
        $data['count_partner']         = $this->M_cms->count_partner();
        $data['count_testimonial']     = $this->M_cms->count_testimonial();
        $data['teams']                 = $this->M_team->get_data('team')->result();
        $data['partners']              = $this->M_partner->get_data('partner')->result();
        $data['testimonials']          = $this->db->query("SELECT * FROM testimonial where status='1'")->result();

        $this->load->view('layout/frontend/header');
        $this->load->view('layout/frontend/topbar');
        $this->load->view('pages/frontend/home', $data);
        $this->load->view('layout/frontend/footer');
    }
}
