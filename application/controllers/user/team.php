<?php

class Team extends CI_Controller
{
    public function index()
    {
        $data['teams']                 = $this->M_team->get_data('team')->result();
        $data['partners']              = $this->M_partner->get_data('partner')->result();

        $this->load->view('layout/frontend/header');
        $this->load->view('layout/frontend/topbar');
        $this->load->view('pages/frontend/team', $data);
        $this->load->view('layout/frontend/footer');
    }
}
