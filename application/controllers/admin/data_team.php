<?php

class Data_team extends CI_Controller
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
            $data['teams'] = $this->db->query("SELECT * FROM team INNER JOIN position ON team.name_position=position.name_position")->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/team/team', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function add()
    {
        if ($this->session->userdata('role_id') === '1') {
            $data['positions'] = $this->M_position->get_data('position')->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/team/add', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function add_action()
    {
        $name_team              = $this->input->post('name_team');
        $name_position          = $this->input->post('name_position');
        $img                    = $_FILES['img'];
        if ($img) {
            $config['upload_path']    = './assets/backend/img/team';
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
            'name_team'             => $name_team,
            'name_position'         => $name_position,
        );

        $this->M_team->insert_data($data, 'team');
        redirect('admin/data_team');
    }
    public function update($id_team)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_team' => $id_team);
            $data['teams'] = $this->M_team->take_id_team($id_team);
            $data['positions'] = $this->M_position->get_data('position')->result();

            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/team/edit', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function update_action()
    {
        $id_team                = $this->input->post('id_team');
        $name_team                  = $this->input->post('name_team');
        $name_position          = $this->input->post('name_position');
        $img                    = $_FILES['img'];
        if ($img) {
            $config['upload_path']    = './assets/backend/img/team';
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
            'name_team'                 => $name_team,
            'name_position'                  => $name_position
        );

        $where = array('id_team' => $id_team);
        $this->M_news->update_data('team', $data, $where);
        redirect('admin/data_team');
    }
    public function delete($id_team)
    {
        if ($this->session->userdata('role_id') === '1') {
            $where = array('id_team' => $id_team);
            $this->M_team->delete_data($where, 'team');
            redirect('admin/data_team');
        } else {
            redirect('admin/block_access');
        }
    }
}
