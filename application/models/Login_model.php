<?php
class Login_model extends CI_Model
{
    public function check_login($username, $password)
    {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('tb_user');
    }
}
