<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function get_users()
    {
        $query = $this->db->select('id, firstname, lastname, username, password, email')->get('user');
        $result = $query->result_array();

        return $result;
    }

    function get_user_by_id($id = NULL)
    {
        $query = $this->db->where('id', $id)->get('user');      
        $user = $query->result_array();
        return $user;
    }

    function get_user_by_username($username = NULL)
    {
        $query = $this->db->where('username', $username)->get('user');      
        $user = $query->result_array();
        return $user;
    }
    function get_user_by_email($email = NULL)
    {
        $query = $this->db->where('email', $email)->get('user');      
        $user = $query->result_array();
        return $user;
    }
    function signin($username = NULL, $password = NULL)
    {
        $query = $this->db->where('username', $username)->get('user');
        $user = $query->result_array();
        if($user)
        {
            if(password_verify($password, $user[0]['password']))
                return $user[0];
        }

        return NULL;
    }

}