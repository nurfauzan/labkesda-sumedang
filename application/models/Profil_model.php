<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    // Tabel Latar Belakang
    function cekDataLatarBelakang()
    {
        $this->db->from('profil_latarbelakang');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }
    function showDataLatarBelakang()
    {
        $this->db->from('profil_latarbelakang');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }
    function showEditLatarBelakang($id)
    {
        $this->db->from('profil_latarbelakang');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function simpanEditLatarBelakang($id)
    {
        $data = array(
            'latar_belakang' => $this->input->post('isi')
        );
        $this->db->where('id', $id);
        $this->db->update('profil_latarbelakang', $data);
    }

    // Tabel Landasan Hukum
    function cekDataLandasanHukum()
    {
        $this->db->from('profil_landasan_hukum');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }
    function showDataLandasanHukum()
    {
        $this->db->from('profil_landasan_hukum');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }
    function showEditLandasanHukum($id)
    {
        $this->db->from('profil_landasan_hukum');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function simpanEditLandasanHukum($id)
    {
        $data = array(
            'landasan_hukum' => $this->input->post('isi')
        );
        $this->db->where('id', $id);
        $this->db->update('profil_landasan_hukum', $data);
    }

    // Tabel Visi & Misi
    function cekDataVisiMisi()
    {
        $this->db->from('profil_visimisi');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row_array();
    }
    function showDataVisiMisi()
    {
        $this->db->from('profil_visimisi');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }
    function showEditVisiMisi($id)
    {
        $this->db->from('profil_visimisi');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function simpanEditVisiMisi($id)
    {
        $data = array(
            'visimisi' => $this->input->post('isi')
        );
        $this->db->where('id', $id);
        $this->db->update('profil_visimisi', $data);
    }

    // Tabel Struktur Organisasi
    public function upload()
    {
        $config['upload_path'] = './assets/img/struktur_org';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('foto')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    // Fungsi untuk menyimpan data ke database
    public function simpan($upload)
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'foto' => 'assets/img/struktur_org/' . $upload['file']['file_name']
        );

        $this->db->insert('profil_struktur_org', $data);
    }
    function edit($id)
    {
        return $this->db->get_where('profil_struktur_org', array('id' => $id))->row();
    }

    public function simpanedit($upload, $id)
    {
        $row = $this->db->where('id', $id)->get('profil_struktur_org')->row();
        unlink(FCPATH . $row->foto);
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'foto' => 'assets/img/struktur_org/' . $upload['file']['file_name'],

        );

        $this->db->where('id', $id);
        $this->db->update('profil_struktur_org', $data);
    }
    public function updatenofoto($id)
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
        );

        $this->db->where('id', $id);
        $this->db->update('profil_struktur_org', $data);
    }

    function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('profil_struktur_org');
    }

    function total_rows()
    {
        return $this->db->get('profil_struktur_org')->num_rows();
    }
}
