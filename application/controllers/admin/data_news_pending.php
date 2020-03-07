<?php

class Data_news_pending extends CI_Controller
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
        if ($this->session->userdata('role_id') === '2') {
            $data['newses'] = $this->db->query("SELECT * FROM news INNER JOIN category ON news.name_category=category.name_category where status='0'")->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/news/news_pending', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function add()
    {
        if ($this->session->userdata('role_id') === '2') {
            $data['categories'] = $this->M_category->get_data('category')->result();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/news/add_pending', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function add_action()
    {
        $id                     = $this->input->post('id');
        $title                  = $this->input->post('title');
        $id_user                = $this->input->post('id_user');
        $name_category          = $this->input->post('name_category');
        $body                   = $this->input->post('body');
        $img                    = $_FILES['img'];
        if ($img) {
            $config['upload_path']    = './assets/backend/img/news';
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
            'title'                 => $title,
            'id_user'               => $id_user,
            'slug'                  => $title,
            'name_category'         => $name_category,
            'body'                  => $body,
            'status'                => 0,
            'date'                  => date('d F Y')
        );

        $this->M_news->insert_data($data, 'news');
        redirect('admin/data_news_pending');
    }
    public function update($id)
    {
        if ($this->session->userdata('role_id') === '2') {
            $where = array('id' => $id);
            $data['newses'] = $this->M_news->take_id_news($id);
            $data['categories'] = $this->M_category->get_data('category')->result();

            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/news/edit_pending', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function update_action()
    {
        $id                = $this->input->post('id');
        $title                  = $this->input->post('title');
        $name_category          = $this->input->post('name_category');
        $body                   = $this->input->post('body');
        $img                    = $_FILES['img'];
        if ($img) {
            $config['upload_path']    = './assets/backend/img/news';
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
            'title'                 => $title,
            'slug'                  => $title,
            'name_category'         => $name_category,
            'body'                  => $body,
            'status'                => 0,
        );

        $where = array('id' => $id);
        $this->M_news->update_data('news', $data, $where);
        redirect('admin/data_news_pending');
    }
    public function detail($id)
    {
        if ($this->session->userdata('role_id') === '2') {
            $data['detail'] = $this->M_news->take_id_news($id);
            $data['newses'] = $this->db->query("SELECT * FROM news INNER JOIN category ON news.name_category=category.name_category")->result();
            $data['categories'] = $this->M_category->get_data('category')->result();
            $this->load->view('layout/backend/header');
            $this->load->view('layout/backend/topbar');
            $this->load->view('layout/backend/sidebar');
            $this->load->view('pages/backend/news/detail_pending', $data);
            $this->load->view('layout/backend/footer');
        } else {
            redirect('admin/block_access');
        }
    }
    public function delete($id)
    {
        if ($this->session->userdata('role_id') === '2') {
            $where = array('id' => $id);
            $this->M_news->delete_data($where, 'news');
            redirect('admin/data_news_pending');
        } else {
            redirect('admin/block_access');
        }
    }
}
