<?php

class Data_partner extends CI_Controller
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
            $data['partners'] = $this->db->query("SELECT * FROM partner")->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/partner/partner', $data);
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
            $this->load->view('pages/backend/partner/add');
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function add_action()
    {
        $name_partner              = $this->input->post('name_partner');
        $img                    = $_FILES['img'];
        if ($img) {
            $config['upload_path']    = './assets/backend/img/partner';
            $config['allowed_types']  = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('img')) {
                $img = $this->upload->data('file_name');
                $this->db->set('img', $img);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = array(
            'name_partner'             => $name_partner
        );

        $this->M_partner->insert_data($data, 'partner');
        redirect('admin/data_partner');
    }
    public function update($id_partner)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_partner' => $id_partner);
            $data['partners'] = $this->M_partner->take_id_partner($id_partner);

            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/partner/edit', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function update_action()
    {
        $id_partner                = $this->input->post('id_partner');
        $name_partner              = $this->input->post('name_partner');
        $img                    = $_FILES['img'];
        if ($img) {
            $config['upload_path']    = './assets/backend/img/partner';
            $config['allowed_types']  = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('img')) {
                $img = $this->upload->data('file_name');
                $this->db->set('img', $img);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = array(
            'name_partner'             => $name_partner
        );

        $where = array('id_partner' => $id_partner);
        $this->M_news->update_data('partner', $data, $where);
        redirect('admin/data_partner');
    }
    public function delete($id_partner)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_partner' => $id_partner);
            $this->M_partner->delete_data($where, 'partner');
            redirect('admin/data_partner');
        } else {
            redirect('admin/block_access');
        }
    }
}
