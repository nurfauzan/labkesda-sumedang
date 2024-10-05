<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
  public function getAll()
  {
    $query = $this->db->get('user_menu');
    return $query->result_array();
  }
  public function getSubMenu()
  {
    $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
    FROM `user_sub_menu` JOIN`user_menu`
    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
    ";

    return $this->db->query($query)->result_array();
  }

  function menu_list()
  {
    $this->db->order_by("id", "asc");
    $hasil = $this->db->get('user_menu');
    return $hasil->result();
  }

  public function save_menu()
  {
    $data = array(
      'id' => '',
      'menu'  => $this->input->post('menu'),
    );
    $result = $this->db->insert('user_menu', $data);
    return $result;
  }

  public function update_menu()
  {
    $menu = $this->input->post('menu_update');
    $id = $this->input->post('id_update');
    $this->db->set('menu', $menu);
    $this->db->where('id', $id);
    $result = $this->db->update('user_menu');
    return $result;
  }

  public function delete_menu()
  {
    $id = $this->input->post('id');
    $this->db->where('id', $id);
    $result = $this->db->delete('user_menu');
    return $result;
  }

  public function sub_menu_list()
  {
    $query = "SELECT `user_menu`.`id` AS `id_menu`,`user_menu`.`menu`,`user_sub_menu`.`id`,`user_sub_menu`.`title`,`user_sub_menu`.`url`,`user_sub_menu`.`icon`
    FROM user_menu JOIN user_sub_menu
    ON `user_menu`.`id` = `user_sub_menu`.`menu_id`";
    $hasil = $this->db->query($query);
    return $hasil->result();
  }

  // public function save_sub_menu()
  // {
  //   $data = array(
  //    'id' =>'',
  //    'role'  => $this->input->post('role'),
  //  );
  //   $result = $this->db->insert('user_role', $data);
  //   return $result;
  // }

  public function update_sub_menu()
  {
    $id_update = $this->input->post('id_update');
    $menu_id_update = $this->input->post('menu_id_update');
    $title_update = $this->input->post('title_update');
    $url_update = $this->input->post('url_update');
    $icon_update = $this->input->post('icon_update');
    $this->db->set('title', $title_update);
    $this->db->set('menu_id', $menu_id_update);
    $this->db->set('url', $url_update);
    $this->db->set('icon', $icon_update);
    $this->db->where('id', $id_update);
    $result = $this->db->update('user_sub_menu');
    return $result;
  }

  public function delete_sub_menu()
  {
    $id = $this->input->post('id');
    $this->db->where('id', $id);
    $result = $this->db->delete('user_role');
    return $result;
  }
}
