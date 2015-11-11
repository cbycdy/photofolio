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

    /**
    *
    *   Update a user from user table by given id and data array.
    *
    *   @since  10-25-2015  
    *   @author Sean Seungwoo Choi
    *   @access public
    *   @param id, data array
    *   @return a user iobject array
    *
    */
    function update($id = NULL, $data = NULL)
    {
        if($id === NULL)
            return NULL;
        
        if($data === NULL)
            return NULL;

        $this->db->where('id', $id)->update('user', $data);
        
        $query = $this->db->where('id', $id)->get('user');
        $user = $query->result_array();

        return $user;
    }

    /**
    *
    *   Create a user from user table by given id and data array.
    *
    *   @since  10-25-2015  
    *   @author Sean Seungwoo Choi
    *   @access public
    *   @param data array
    *   @return a user object array
    *
    */
    function create($data = NULL)
    {
        if($data === NULL)
            return NULL;

        //Double-check duplicate of username and email.
        $user1 = $this->user->get_user_by_username($data['username']);
        $user2 = $this->user->get_user_by_email($data['email']);

        //It's clean, insert new user from post data.
        if(!$user1 && !$user2)
        {
            $this->db->insert('user', $data);

            $query = $this->db->order_by('id', 'desc')->limit(1)->get('user');
            $user = $query->result_array();

            return $user;
        }

        return NULL;
    }

    /**
    *
    *   Delete a user from user table by given id and data array.
    *
    *   @since  10-25-2015  
    *   @author Sean Seungwoo Choi
    *   @access public
    *   @param data array
    *   @return deleted user id.
    *
    */
    function delete($id = NULL)
    {
        if($id === NULL)
            return NULL;

        $this->db->where('id', $id)->delete('user');

        return $id;
    }

}