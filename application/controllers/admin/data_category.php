<?php

class Data_category extends CI_Controller
{

    public function index()
    {
        $data['categories'] = $this->db->query("SELECT * FROM category")->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/category/category', $data);
        $this->load->view('layout/backend/footer');
    }
    public function add()
    {
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/category/add');
        $this->load->view('layout/backend/footer');
    }
    public function add_action()
    {
        $name_category          = $this->input->post('name_category');

        $data = array(

            'name_category'         => $name_category
        );

        $this->M_category->insert_data($data, 'category');
        redirect('admin/data_category');
    }
    public function update($id_category)
    {
        $where = array('id_category' => $id_category);
        $data['categorys'] = $this->M_category->take_id_category($id_category);

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/category/edit', $data);
        $this->load->view('layout/backend/footer');
    }
    public function update_action()
    {
        $id_category                = $this->input->post('id_category');
        $name_category          = $this->input->post('name_category');
        $data = array(
            'name_category'                 => $name_category,
        );

        $where = array('id_category' => $id_category);
        $this->M_category->update_data('category', $data, $where);
        redirect('admin/data_category');
    }
    public function delete($id_category)
    {
        $where = array('id_category' => $id_category);
        $this->M_category->delete_data($where, 'category');
        redirect('admin/data_category');
    }
}
