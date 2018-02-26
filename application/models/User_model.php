<?php

/**
 * Created by PhpStorm.
 * UserModel: justi
 * Date: 26-2-2018
 * Time: 12:56
 */
class User_model extends CI_Model
{
    public function __construct() {
        $this->load->database();
    }

    public function checkUser($firstname, $lastname, $username, $password, $email) {
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        $options = [
            'cost' => 8,
        ];
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, $options);
        if (password_verify($password, $passwordHash)) {
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                $this->saveUser($firstname, $lastname, $username, $password, $email);
            }
        } else {
            return false;
        }
    }

    public function saveUser($firstname, $lastname, $username, $password, $email)
    {
        $data = array('Firstname' => $firstname, 'Lastname' => $lastname, 'Username' => $username, 'Password' => $password, 'Email' => $email);
        $this->db->insert('user', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}