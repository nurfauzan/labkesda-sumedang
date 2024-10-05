<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

    public function bukutamu()
    {
        $data['title'] = 'Bukutamu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['bukutamu'] = $this->db->get('bukutamu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kontak/bukutamu', $data);
        $this->load->view('templates/footer');
    }
}
