<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_model');
    }

    public function index()
    {
        $data['title'] = 'Input Hasil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('hasil/index', $data);
        $this->load->view('templates/footer');
    }

    public function simpanhasil()
    {
        $data = array();

        $upload = $this->Hasil_model->upload();
        if ($upload['result'] == "success") {
            $this->Hasil_model->save($upload);
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect(base_url('pemeriksaan/'));
        } else {
            $data['message'] = $upload['error'];
            $this->session->set_flashdata('message', 'Data gagal diubah!');
            redirect(base_url('pemeriksaan/'));
        }
    }

    //EDIT
    function edit($id)
    {
        $data['title'] = 'Ubah Hasil Pemeriksaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['hasil'] = $this->Hasil_model->edit($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('arsip/edit-hasil', $data);
        $this->load->view('templates/footer');
    }
    function prosesedit()
    {
        $data = array();
        $id = $this->input->post('id');
        if (isset($_POST['submit'])) {
            if (!empty($_FILES) && $_FILES["doc_hasil"]["name"]) {
                $upload = $this->Hasil_model->upload();
                if ($upload['result'] == "success") {
                    $this->Hasil_model->update($upload, $id);
                    $this->session->set_flashdata('success', 'Data berhasil diubah.');
                    redirect(base_url('pemeriksaan/arsip_pemeriksaan'));
                } else {
                    $data['message'] = $upload['error'];
                    $this->session->set_flashdata('message', 'Data gagal diubah!');
                    redirect(base_url('pemeriksaan/edit/' . $id));
                }
            } else {
                $this->Hasil_model->updatenodoc($id);
                $this->session->set_flashdata('success', 'Data berhasil diubah.');
                redirect(base_url('pemeriksaan/arsip_pemeriksaan'));
            }
        } else {
            redirect(base_url('pemeriksaan/edit/' . $id));
        }
    }

    function hapus($id)
    {
        $this->Hasil_model->hapus($id);
        $this->session->set_flashdata('hapus', 'Data behasil dihapus.');
        redirect(base_url('pemeriksaan/arsip_pemeriksaan'));
    }

    public function kadarnormal()
    {
        $data['title'] = 'Kadar Normal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kadarnormal'] = $this->db->get('hasil_kadar_normal')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('hasil/kadar-normal', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Model_hasil->inputhasil();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('pemeriksaan/kadarnormal');
        }
    }

    public function tarif()
    {
        $data['title'] = 'Tarif Pemeriksaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kadarnormal'] = $this->db->get('hasil_kadar_normal')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('hasil/tarif-pemeriksaan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Model_hasil->inputhasil();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('pemeriksaan/tarif');
        }
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
    public function detail($id)
    {
        $data['title'] = 'Detail Hasil Pemeriksaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['hasil'] = $this->Hasil_model->detail($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('arsip/detail-arsip', $data);
        $this->load->view('templates/footer');
    }
}
