<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function checkEmailPhone($emailPhone)
    {
        return $this->db->query("SELECT * FROM user WHERE user_email = '$emailPhone' OR user_phone = '$emailPhone' ");
    }
    public function checkPassword($emailPhone, $password)
    {
        return $this->db->query("SELECT * FROM user WHERE (user_email = '$emailPhone' OR user_phone = '$emailPhone') AND password = '$password' ");
    }

    public function adminCheckEmailUsername($emailUsername)
    {
        return $this->db->query("SELECT * FROM user_admin WHERE user_email = '$emailUsername' OR user_username = '$emailUsername' ");
    }

    public function adminCheckPassword($emailUsername, $password)
    {
        return $this->db->query("SELECT * FROM user_admin WHERE (user_email = '$emailUsername' OR user_username = '$emailUsername') AND user_password = '$password' ");
    }

    public function adminGetUserByID($user_id)
    {
        return $this->db->query("SELECT * FROM user_admin WHERE user_id = '$user_id' ");
    }
}
