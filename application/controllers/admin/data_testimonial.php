<?php

class Data_testimonial extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        if ($this->session->userdata('role_id') === '1') {
            $data['testimonials'] = $this->db->query("SELECT * FROM testimonial where status='1'")->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/testimonial/testimonial', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function pending()
    {
        if ($this->session->userdata('role_id') === '1') {
            $data['testimonials'] = $this->db->query("SELECT * FROM testimonial where status='0'")->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/testimonial/testimonial_pending', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function delete($id_testimonial)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_testimonial' => $id_testimonial);
            $this->M_testimonial->delete_data($where, 'testimonial');
            redirect('admin/data_testimonial');
        } else {
            redirect('admin/block_access');
        }
    }
    public function update_status($id_testimonial)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_testimonial' => $id_testimonial);

            $data = array(
                'status'                => '1'
            );

            $this->M_testimonial->update_data('testimonial', $data, $where);
            redirect('admin/data_testimonial/pending');
        } else {
            redirect('admin/block_access');
        }
    }
}
