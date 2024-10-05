<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model');
    }

    public function index()
    {

        $data['title'] = 'Kelola Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['data_menu'] = $this->Menu_model->getAll();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Menu berhasil ditambahkan!
                </div>');
            redirect('menu');
        }
    }

    function menu_data()
    {
        $data = $this->Menu_model->menu_list();
        echo json_encode($data);
    }

    function menu_save()
    {
        $data = $this->Menu_model->save_menu();
        echo json_encode($data);
    }

    function menu_delete()
    {
        $data = $this->Menu_model->delete_menu();
        echo json_encode($data);
    }

    function menu_update()
    {
        $data = $this->Menu_model->update_menu();
        echo json_encode($data);
    }

    public function submenu()
    {
        $data['title'] = 'Kelola Submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Nama submenu', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Link', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => "1"
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Submenu berhasil ditambahkan!
                </div>');
            redirect('menu/submenu');
        }
    }

    public function hapussubmenu()
    {
        $id = $this->input->post('id_delete');
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Submenu berhasil dihapus!
            </div>');
        redirect('menu/submenu');
    }

    function sub_menu_data()
    {
        $data = $this->Menu_model->sub_menu_list();
        // var_dump($data);
        // die();
        echo json_encode($data);
    }

    // function sub_menu_save(){
    //     $data=$this->Role_model->save_role();
    //     echo json_encode($data);
    // }

    function sub_menu_delete()
    {
        $data = $this->Role_model->delete_role();
        echo json_encode($data);
    }

    function sub_menu_update()
    {
        $data = $this->Menu_model->update_sub_menu();
        echo json_encode($data);
    }
}
