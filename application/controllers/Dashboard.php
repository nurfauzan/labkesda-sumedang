<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        //load modelnya dulu
        $this->load->model('Hasil_model');
        $this->data['total_pemeriksaan'] =  $this->Hasil_model->total_rows();
    }

    public function arsip_pemeriksaan()
    {
        $data['title'] = 'Hasil Pemeriksaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['arsip'] = $this->db->get('hasil_pemeriksaan')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('arsip/index', $data);
        $this->load->view('templates/footer');
    }
}
