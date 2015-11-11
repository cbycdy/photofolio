<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';


class User_api extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['user_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['user_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['user_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    public function users_get()
    {
        // Users from database
        $this->load->model('user');
        $users = $this->user->get_users();
        
        $id = $this->get('id');

        // If the id parameter doesn't exist return all the users
        if ($id === NULL)
        {
            // Check if the users data store contains users (in case the database result returns NULL)
            if ($users)
            {
                // Set the response and exit
                $this->response($users, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            }
            else
            {
                // Set the response and exit
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }

        // Find and return a single record for a particular user.

        $id = (int) $id;

        // Validate the id.
        if ($id <= 0)
        {
            // Invalid id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // Get the user from the array, using the id as key for retreival.
        // Usually a model is to be used for this.

        $user = NULL;

        if (!empty($users))
        {
            foreach ($users as $key => $value)
            {
                if (isset($value['id']) && (int) $value['id'] === $id)
                {
                    $user = $value;
                }
            }
        }

        if (!empty($user))
        {
            $this->set_response($user, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }

    public function users_post()
    {
        $this->load->model('user');
        try
        {
            $post = $this->post();
            $user_data['firstname'] = $post['firstname'];   
            $user_data['lastname'] = $post['lastname']; 
            $user_data['username'] = $post['username']; 
            $user_data['password'] = password_hash($post['password'], PASSWORD_BCRYPT); 
            $user_data['email'] = $post['email'];
            $user = $this->user->create($user_data);
        } catch (Exception $e) {
            // Here the model can throw exceptions like the following:
            // * Invalid input data:
            //   throw new Exception('Invalid request data', 400);
            // * Conflict when attempting to create, like a resubmit:
            //   throw new Exception('User already exists', 409)
            $this->response(array('error' => $e->getMessage()), $e->getCode());
        }
        if(!$user)
        {
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }   

        $this->response($user, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code    
    }

    public function users_put()
    {
        $this->load->model('user');
        try
        {
            $put = $this->put();
            $id = $put['id'];
            $user_data['firstname'] = $put['firstname'];   
            $user_data['lastname'] = $put['lastname']; 
            $user_data['username'] = $put['username']; 
            $user_data['password'] = password_hash($put['password'], PASSWORD_BCRYPT); 
            $user_data['email'] = $put['email'];
            
            $user = $this->user->update($id, $user_data);

        } catch (Exception $e) {
            $this->response(array('error' => $e->getMessage()), $e->getCode());
        }

        if(!$user)
        {
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }
                    
        $this->response($user, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }

    public function users_delete()
    {
        $this->load->model('user');
        try
        {
            $delete = json_decode(array_keys($this->delete())[0]);;
            $id = $this->user->delete($delete->id);

        } catch (Exception $e) {
            $this->response(array('error' => $e->getMessage()), $e->getCode());
        }

        $status = 'success';
        
        
        if(!$id)
        {
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }
                    
        $this->response(array('status' => $status), REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }

}
