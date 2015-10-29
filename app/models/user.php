<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /**
    *
    *   Gets all users from user table.
    *
    *   @since  10-20-2015  
    *   @author Sean Seungwoo Choi
    *   @access public
    *   @return user array list
    *
    */
    function get_users()
    {
        $query = $this->db->select('id, firstname, lastname, username, password, email')->get('user');
        $result = $query->result_array();

        return $result;
    }

    /**
    *
    *   Gets a user from user table by given user id.
    *
    *   @since  10-20-2015  
    *   @author Sean Seungwoo Choi
    *   @access public
    *   @param integer User id that is primary key in user table
    *   @return a user object array
    *
    */
    function get_user_by_id($id = NULL)
    {
        $query = $this->db->where('id', $id)->get('user');  
        $user = $query->result_array();
        return $user;
    }

    /**
    *
    *   Gets a user from user table by given username.
    *
    *   @since  10-21-2015  
    *   @author Sean Seungwoo Choi
    *   @access public
    *   @param string Username
    *   @return a user object array
    *
    */
    function get_user_by_username($username = NULL)
    {
        $query = $this->db->where('username', $username)->get('user');  
        $user = $query->result_array();
        return $user;
    }

    /**
    *
    *   Gets a user from user table by given email.
    *
    *   @since  10-21-2015  
    *   @author Sean Seungwoo Choi
    *   @access public
    *   @param string Email
    *   @return a user object array
    *
    */
    function get_user_by_email($email = NULL)
    {
        $query = $this->db->where('email', $email)->get('user');      
        $user = $query->result_array();
        return $user;
    }

    /**
    *
    *   Gets a user from user table by given username and password.
    *
    *   @since  10-21-2015  
    *   @author Sean Seungwoo Choi
    *   @access public
    *   @param string username, string password
    *   @return a user object array
    *
    */
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