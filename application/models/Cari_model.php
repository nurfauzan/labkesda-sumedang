<?php

class Cari_model extends CI_Model
{

    public function cariHasil()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from hasil_pemeriksaan where no_kwitansi like '%$cari%'");
        return $data->result();
    }
}
