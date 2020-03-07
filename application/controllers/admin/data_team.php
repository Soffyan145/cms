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
            $this->load->model('M_team', 'team');
            //pagination
            $config['base_url'] = "http://localhost/cms/admin/data_team/index";
            $config['total_rows'] = $this->M_news->count_news();
            $config['per_page'] = 5;

            //styling
            $config['full_tag_open'] = '<div class="card-body"><nav aria-label="..."><ul class="pagination">';
            $config['full_tag_close'] = '</ul></nav></div>';

            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');
            //initialize
            $this->pagination->initialize($config);



            $data['start'] = $this->uri->segment(4);
            $data['teams'] = $this->M_team->get_team($config['per_page'], $data['start']);
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
