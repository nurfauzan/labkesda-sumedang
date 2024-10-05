<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');
    }

    // Tabel Latar Belakang
    public function index()
    {
        $data['title'] = 'Latar Belakang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['cekLatarBelakang'] = $this->Profil_model->cekDataLatarBelakang();
        $data['dataLatarBelakang'] = $this->Profil_model->showDataLatarBelakang();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/index', $data);
        $this->load->view('templates/footer');
    }

    public function editLatarBelakang($id)
    {
        $data['title'] = 'Latar Belakang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['editLatarBelakang'] = $this->Profil_model->showEditLatarBelakang($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/edit-latar', $data);
        $this->load->view('templates/footer');
    }

    function prosesEditLatarBelakang($id)
    {
        if (isset($_POST['submit'])) {
            $this->Profil_model->simpanEditLatarBelakang($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui!</div>');
            redirect('profil');
        } else {
            redirect(base_url('profil'));
        }
    }

    // Tabel Landasan Hukum
    public function landasanhukum()
    {
        $data['title'] = 'Landasan Hukum';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['cekLandasanHukum'] = $this->Profil_model->cekDataLandasanHukum();
        $data['dataLandasanHukum'] = $this->Profil_model->showDataLandasanHukum();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/landasan-hukum', $data);
        $this->load->view('templates/footer');
    }

    public function editLandasanHukum($id)
    {
        $data['title'] = 'Landasan Hukum';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['editLandasanHukum'] = $this->Profil_model->showEditLandasanHukum($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/edit-landasanhukum', $data);
        $this->load->view('templates/footer');
    }

    function prosesEditLandasanHukum($id)
    {
        if (isset($_POST['submit'])) {
            $this->Profil_model->simpanEditLandasanHukum($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui!</div>');
            redirect('profil/landasanhukum');
        } else {
            redirect(base_url('profil/landasanhukum'));
        }
    }

    // Tabel Visi & Misi
    public function visimisi()
    {
        $data['title'] = 'Visi & Misi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['cekVisiMisi'] = $this->Profil_model->cekDataVisiMisi();
        $data['dataVisiMisi'] = $this->Profil_model->showDataVisiMisi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/visimisi', $data);
        $this->load->view('templates/footer');
    }

    public function editVisiMisi($id)
    {
        $data['title'] = 'Visi & Misi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['editVisiMisi'] = $this->Profil_model->showEditVisiMisi($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/edit-visimisi', $data);
        $this->load->view('templates/footer');
    }

    function prosesEditVisiMisi($id)
    {
        if (isset($_POST['submit'])) {
            $this->Profil_model->simpanEditVisiMisi($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diperbaharui!</div>');
            redirect('profil/visimisi');
        } else {
            redirect(base_url('profil/visimisi'));
        }
    }

    public function strukturorg()
    {
        $data['title'] = 'Struktur Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['struktur'] = $this->db->get('profil_struktur_org')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/struktur-org', $data);
        $this->load->view('templates/footer');
    }

    public function inputOrg()
    {
        $data['title'] = 'Struktur Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/input-org', $data);
        $this->load->view('templates/footer');
    }

    function simpan()
    {
        if (isset($_POST['submit'])) {
            $upload = $this->Profil_model->upload();
            if ($upload['result'] == "success") {
                $this->Profil_model->simpan($upload);
                $this->session->set_flashdata('success', 'Berhasil! Data telah ditambahkan.');
                redirect(base_url('profil/strukturorg'));
            } else {
                $data['message'] = $upload['error'];
            }
        } else {
            redirect(base_url('profil/strukturorg'));
        }
    }

    public function editOrg($id)
    {
        $data['title'] = 'Struktur Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['editOrg'] = $this->Profil_model->edit($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/edit-org', $data);
        $this->load->view('templates/footer');
    }

    function simpanedit($id)
    {
        $data = array();
        if (isset($_POST['submit'])) {
            if (!empty($_FILES) && $_FILES["foto"]["name"]) {
                $upload = $this->Profil_model->upload();
                if ($upload['result'] == "success") {
                    $this->Profil_model->simpanedit($upload, $id);
                    $this->session->set_flashdata('success', 'Berhasil! Data telah diubah.');
                    redirect(base_url('profil/strukturorg'));
                } else {
                    $data['message'] = $upload['error'];
                }
            } else {
                $this->Profil_model->updatenofoto($id);
                $this->session->set_flashdata('success', 'Berhasil! Data telah diubah.');
                redirect(base_url('profil/strukturorg'));
            }
        } else {
            redirect(base_url('profil/strukturorg'));
        }
    }

    function hapusOrg($id)
    {
        $this->Profil_model->hapus($id);
        $this->session->set_flashdata('hapus', 'Berhasil! Data telah di <label class="label label-default">hapus</label> .');
        redirect(base_url('profil/strukturorg'));
    }

    public function sarana()
    {
        $data['title'] = 'Sarana & Prasarana';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['desc_bangunan'] = $this->db->get('profil_sarana_desc')->result_array();

        $data['desc_peralatan'] = $this->db->get('profil_sarana_desc')->result_array();

        $data['bangunan'] = $this->db->get('profil_sarana_bangunan')->result_array();

        $data['peralatan'] = $this->db->get('profil_sarana_peralatan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/sarana-prasarana', $data);
        $this->load->view('templates/footer');
    }
}
