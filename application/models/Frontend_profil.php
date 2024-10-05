<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_profil extends CI_Model
{
    // Tabel Latar Belakang

    function showDataLatarBelakang()
    {
        $this->db->from('profil_latarbelakang');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // Tabel Landasan Hukum

    function showDataLandasanHukum()
    {
        $this->db->from('profil_landasan_hukum');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // Tabel Visi & Misi

    function showDataVisiMisi()
    {
        $this->db->from('profil_visimisi');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    // Tabel Struktur Organisasi
    function showDataStruktur()
    {
        $this->db->from('profil_visimisi');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }
}
