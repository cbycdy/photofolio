<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    /*
    * Form validation:
    *
    * @Author: Sean Seungwoo Choi
    * 
    *  username requires only letters and numbers. (!@#$%^&*() kinds special character is not allowd)
    *  password requires at least one number, lowecase letter, uppercase letter, and at least 6 long.
    * 
    * See the details from error message.
    *
    *  "required" attribute won't wonk with Safari nor IE. 
    */  
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