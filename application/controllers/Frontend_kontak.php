<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_kontak extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/templates/navbar', $data);
            $this->load->view('frontend/kontak-bukutamu');
            $this->load->view('frontend/templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'pesan' => $this->input->post('pesan'),
            ];
            $this->db->insert('bukutamu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Tanggapan telah dikirim!
              </div>');
            redirect('frontend_kontak/');
        }
    }
}
