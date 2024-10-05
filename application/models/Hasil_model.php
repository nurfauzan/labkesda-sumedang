<?php
class Hasil_model extends CI_Model
{
    function showdata()
    {
        $this->db->from('hasil_pemeriksaan');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Fungsi untuk melakukan proses upload file
    public function upload()
    {
        $config['upload_path'] = './assets/hasil/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']  = '15360';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('doc_hasil')) { // Lakukan upload dan Cek jika proses upload berhasil
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
    public function save($upload)
    {
        $tgl = date('Y-m-d');
        $data = array(
            'tgl_periksa' => $tgl,
            'no_kwitansi' => $this->input->post('no_kwitansi'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'umur_pasien' => $this->input->post('umur_pasien'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat_pasien' => $this->input->post('alamat_pasien'),
            'doc_hasil' => 'assets/hasil/' . $upload['file']['file_name']
        );

        $this->db->insert('hasil_pemeriksaan', $data);
    }
    function edit($id)
    {
        return $this->db->get_where('hasil_pemeriksaan', array('id' => $id))->row();
    }
    public function update($upload, $id)
    {
        $row = $this->db->where('id', $id)->get('hasil_pemeriksaan')->row();
        unlink(FCPATH . $row->doc_hasil);
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'umur_pasien' => $this->input->post('umur_pasien'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat_pasien' => $this->input->post('alamat_pasien'),
            'doc_hasil' => 'assets/hasil/' . $upload['file']['file_name']
        );

        $this->db->where('id', $id);
        $this->db->update('hasil_pemeriksaan', $data);
    }
    public function updatenodoc($id)
    {
        $data = array(
            'nama_pasien' => $this->input->post('nama_pasien'),
            'umur_pasien' => $this->input->post('umur_pasien'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat_pasien' => $this->input->post('alamat_pasien')
        );

        $this->db->where('id', $id);
        $this->db->update('hasil_pemeriksaan', $data);
    }

    function hapus($id)
    {
        $id = $this->input->post('id');
        if (file_exists(FCPATH . $id->doc_hasil)) {
            unlink(FCPATH . $id->doc_hasil);
        }
        $this->db->where('id', $id);
        $this->db->delete('hasil_pemeriksaan');
    }

    function detail($id)
    {
        return $this->db->get_where('hasil_pemeriksaan', array('id' => $id))->row();
    }

    function total_rows()
    {
        return $this->db->get('hasil_pemeriksaan')->num_rows();
    }
}
