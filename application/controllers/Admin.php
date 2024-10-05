<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Role_model');
    }


    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Hasil_model');
        $data['total_pemeriksaan'] =  $this->Hasil_model->total_rows();
        $this->load->model('User_model');
        $data['total_user'] =  $this->User_model->total_rows();
        $this->load->model('Profil_model');
        $data['total_staff'] =  $this->Profil_model->total_rows();
        $this->load->model('Role_model');
        $data['total_peran'] =  $this->Role_model->total_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Peran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    function role_data()
    {
        $data = $this->Role_model->role_list();
        echo json_encode($data);
    }

    function role_save()
    {
        $data = $this->Role_model->save_role();
        echo json_encode($data);
    }

    function role_delete()
    {
        $data = $this->Role_model->delete_role();
        echo json_encode($data);
    }

    function role_update()
    {
        $data = $this->Role_model->update_role();
        echo json_encode($data);
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Akses Peran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses berhasil diubah!</div>');
    }



    public function listuser()
    {
        $data['title'] = 'List User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('User_model', 'user');

        $data['userMenu'] = $this->user->getUserMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/list-user', $data);
        $this->load->view('templates/footer');
    }
}
