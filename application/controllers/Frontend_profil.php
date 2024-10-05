<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_profil extends CI_Controller
{
    public function index()
    {
        $data['latar_belakang'] = $this->db->get('profil_latarbelakang')->result_array();

        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/templates/navbar', $data);
        $this->load->view('frontend/profil-latarbelakang', $data);
        $this->load->view('frontend/templates/footer');
    }
    public function visimisi()
    {
        $data['visimisi'] = $this->db->get('profil_visimisi')->result_array();

        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/templates/navbar', $data);
        $this->load->view('frontend/profil-visimisi');
        $this->load->view('frontend/templates/footer');
    }
    public function struktur_organisasi()
    {
        $data['struktur_org'] = $this->db->get('profil_struktur_org')->result_array();
        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/templates/navbar', $data);
        $this->load->view('frontend/profil-strukturorg');
        $this->load->view('frontend/templates/footer');
    }

    public function landasan_hukum()
    {
        $data['landasan_hukum'] = $this->db->get('profil_landasan_hukum')->result_array();
        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/templates/navbar', $data);
        $this->load->view('frontend/profil-landasanhukum');
        $this->load->view('frontend/templates/footer');
    }
    public function sarana_prasarana()
    {
        $data['desc_bangunan'] = $this->db->get('profil_sarana_desc')->result_array();

        $data['desc_peralatan'] = $this->db->get('profil_sarana_desc')->result_array();

        $data['bangunan'] = $this->db->get('profil_sarana_bangunan')->result_array();

        $data['peralatan'] = $this->db->get('profil_sarana_peralatan')->result_array();
        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/templates/navbar', $data);
        $this->load->view('frontend/profil-saranaprasarana');
        $this->load->view('frontend/templates/footer');
    }
}
