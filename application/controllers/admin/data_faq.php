<?php

class Data_faq extends CI_Controller
{

    public function index()
    {
        $data['faqs'] = $this->db->query("SELECT * FROM faq")->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/faq/faq', $data);
        $this->load->view('layout/backend/footer');
    }
    public function add()
    {
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/faq/add');
        $this->load->view('layout/backend/footer');
    }
    public function add_action()
    {
        $question          = $this->input->post('question');
        $answer            = $this->input->post('answer');

        $data = array(

            'question'         => $question,
            'answer'           => $answer
        );

        $this->M_faq->insert_data($data, 'faq');
        redirect('admin/data_faq');
    }
    public function update($id_faq)
    {
        $where = array('id_faq' => $id_faq);
        $data['faqs'] = $this->M_faq->take_id_faq($id_faq);

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/faq/edit', $data);
        $this->load->view('layout/backend/footer');
    }
    public function update_action()
    {
        $id_faq            = $this->input->post('id_faq');
        $question          = $this->input->post('question');
        $answer            = $this->input->post('answer');

        $data = array(

            'question'         => $question,
            'answer'           => $answer
        );

        $where = array('id_faq' => $id_faq);
        $this->M_faq->update_data('faq', $data, $where);
        redirect('admin/data_faq');
    }
    public function delete($id_faq)
    {
        $where = array('id_faq' => $id_faq);
        $this->M_faq->delete_data($where, 'faq');
        redirect('admin/data_faq');
    }
}
