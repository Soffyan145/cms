<?php

class Data_position extends CI_Controller
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
            $data['positions'] = $this->db->query("SELECT * FROM position")->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/position/position', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function add()
    {
        if ($this->session->userdata('role_id') === '1') {
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/position/add');
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function add_action()
    {
        $name_position          = $this->input->post('name_position');

        $data = array(

            'name_position'         => $name_position
        );

        $this->M_position->insert_data($data, 'position');
        redirect('admin/data_position');
    }
    public function update($id_position)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_position' => $id_position);
            $data['positions'] = $this->M_position->take_id_position($id_position);

            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/position/edit', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function update_action()
    {
        if ($this->session->userdata('role_id') === '1') {
            $id_position                = $this->input->post('id_position');
            $name_position          = $this->input->post('name_position');
            $data = array(
                'name_position'                 => $name_position,
            );

            $where = array('id_position' => $id_position);
            $this->M_position->update_data('position', $data, $where);
            redirect('admin/data_position');
        } else {
            redirect('admin/block_access');
        }
    }
    public function delete($id_position)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_position' => $id_position);
            $this->M_position->delete_data($where, 'position');
            redirect('admin/data_position');
        } else {
            redirect('admin/block_access');
        }
    }
}
