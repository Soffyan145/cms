<?php

class Data_news extends CI_Controller
{

    public function index()
    {
        $data['newses'] = $this->db->query("SELECT * FROM news INNER JOIN category ON news.name_category=category.name_category")->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/news/news', $data);
        $this->load->view('layout/backend/footer');
    }
    public function add()
    {
        $data['categories'] = $this->M_category->get_data('category')->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/news/add', $data);
        $this->load->view('layout/backend/footer');
    }
    public function add_action()
    {
        $id                     = $this->input->post('id');
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
            'id_user'               => 1,
            'name_category'         => $name_category,
            'body'                  => $body,
            'status'                => 0,
        );

        $this->M_news->insert_data($data, 'news');
        redirect('admin/data_news');
    }
    public function update($id)
    {
        $where = array('id' => $id);
        $data['newses'] = $this->M_news->take_id_news($id);
        $data['categories'] = $this->M_category->get_data('category')->result();

        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/news/edit', $data);
        $this->load->view('layout/backend/footer');
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
            'id_user'               => 1,
            'name_category'         => $name_category,
            'body'                  => $body,
            'status'                => 0,
        );

        $where = array('id' => $id);
        $this->M_news->update_data('news', $data, $where);
        redirect('admin/data_news');
    }
    public function detail($id)
    {
        $data['detail'] = $this->M_news->take_id_news($id);
        $data['newses'] = $this->db->query("SELECT * FROM news INNER JOIN category ON news.name_category=category.name_category")->result();
        $data['categories'] = $this->M_category->get_data('category')->result();
        $this->load->view('layout/backend/header');
        $this->load->view('layout/backend/topbar');
        $this->load->view('layout/backend/sidebar');
        $this->load->view('pages/backend/news/detail', $data);
        $this->load->view('layout/backend/footer');
    }
    public function delete($id)
    {
        $where = array('id' => $id);
        $this->M_news->delete_data($where, 'news');
        redirect('admin/data_news');
    }
}
