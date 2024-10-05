<?php
class User_model extends CI_Model
{

    public function getUserMenu()
    {
        $query = "SELECT `user`.*,`user_role`.`role`
        FROM `user` JOIN`user_role`
        ON `user`.`role_id` = `user_role`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    function total_rows()
    {
        return $this->db->get('user')->num_rows();
    }
}
