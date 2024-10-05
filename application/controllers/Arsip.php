<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{

    public function rincian_total()
    {
        $data['title'] = 'Jumlah Pemeriksaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['jumlah'] = $this->db->get('hasil_jumlahtotal')->result_array();


        $data['desc_peralatan'] = $this->db->get('profil_sarana_desc')->result_array();
        $data['peralatan'] = $this->db->get('profil_sarana_peralatan')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('arsip/rincian-total', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Model_hasil->inputhasil();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('pemeriksaan/kadarnormal');
        }
    }
}
