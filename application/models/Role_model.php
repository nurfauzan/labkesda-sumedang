<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
   function role_list()
   {
      $this->db->order_by('id', 'asc');
      $hasil = $this->db->get('user_role');
      return $hasil->result();
   }

   public function save_role()
   {
      $data = array(
         'id' => '',
         'role'  => $this->input->post('role'),
      );
      $result = $this->db->insert('user_role', $data);
      return $result;
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
   }

   public function update_role()
   {
      $role = $this->input->post('role_update');
      $id = $this->input->post('id_update');
      $this->db->set('role', $role);
      $this->db->where('id', $id);
      $result = $this->db->update('user_role');
      return $result;
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
   }

   public function delete_role()
   {
      $id = $this->input->post('id');
      $this->db->where('id', $id);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
      $result = $this->db->delete('user_role');
      return $result;
   }
   function total_rows()
   {
      return $this->db->get('user_role')->num_rows();
   }
}
