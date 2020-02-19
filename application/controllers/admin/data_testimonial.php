<?php

class Data_testimonial extends CI_Controller
{

    public function index()
    {
        $data['testimonials'] = $this->db->query("SELECT * FROM testimonial where status='1'")->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/testimonial/testimonial', $data);
        $this->load->view('layout/backend/footer');
    }
    public function pending()
    {
        $data['testimonials'] = $this->db->query("SELECT * FROM testimonial where status='0'")->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/testimonial/testimonial_pending', $data);
        $this->load->view('layout/backend/footer');
    }
    public function delete($id_testimonial)
    {
        $where = array('id_testimonial' => $id_testimonial);
        $this->M_testimonial->delete_data($where, 'testimonial');
        redirect('admin/data_testimonial');
    }
    public function update_status($id_testimonial)
    {
        $where = array('id_testimonial' => $id_testimonial);

        $data = array(
            'status'                => '1'
        );

        $this->M_testimonial->update_data('testimonial', $data, $where);
        redirect('admin/data_testimonial/pending');
    }
}
