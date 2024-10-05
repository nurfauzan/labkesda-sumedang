<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_layanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cari_model');
    }
    public function index()
    {
        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/templates/navbar', $data);
        $this->load->view('frontend/layanan-cekhasil');
        $this->load->view('frontend/templates/footer');
    }

    public function tarif_pemeriksaan()
    {
        $data['tarif'] = $this->db->get('hasil_tarif')->result_array();

        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/templates/navbar', $data);
        $this->load->view('frontend/layanan-tarifpemeriksaan');
        $this->load->view('frontend/templates/footer');
    }

    public function download_hasil()
    {
        $data['cari'] = $this->cari_model->cariHasil();
        $data['title'] = 'UPT LABKESDA KABUPATEN SUMEDANG';
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/templates/navbar', $data);
        $this->load->view('frontend/layanan-download-hasil', $data);
        $this->load->view('frontend/templates/footer');
    }
}
