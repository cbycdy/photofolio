<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_access_control extends CI_Controller {

	public function index()
	{
		$this->load->model('user');
		$this->load->helper('password');
		$post = $this->input->post();
		
		$data['signup_msg'] = '';
		$data['signin_msg'] = '';

		//Post handling
		if ($post)
		{
			//Signup case:
			if($post['from_type'] === 'signup')
			{
				
				$user_data['firstname'] = $post['firstname'];	
				$user_data['lastname'] = $post['lastname'];	
				$user_data['username'] = $post['username'];	
				$user_data['password'] = password_hash($post['password'], PASSWORD_BCRYPT);	
				$user_data['email'] = $post['email'];

				$this->user->create($user_data);
				
				//success
				if($user)
				{
					$this->session->set_message('post_msg', 'Successfuly signed up.', 'success');	
				}

				//There is an error.
				else
				{
					$this->session->set_message('post_msg', 'Invalid post or Username / Email is already used.', 'error');	
					$data['signup_msg'] = 'Invalid post or Username / Email is already used.';
				}
			}
			//Signin case:
			else if($post['from_type'] === 'signin')
			{
				//Try signin with given username and password by calling signin function in user model.
				$user = $this->user->signin($post['username'],$post['password']);
				
				if($user)
				{
					//Two ways to display result message.
					$this->session->set_message('post_msg', 'Welcome, '.$user['firstname'], 'success');	
					$data['signin_msg'] = "<p id='form_success_msg'>Welcome, " . $user['firstname'];
				}
				else
				{
					$this->session->set_message('post_msg', 'Incorrect username or password.', 'error');	
					$data['signin_msg'] = "<p id='form_error_msg'>Incorrect username or password.</p>";
				}
			}
		}
				
		//Get user list from user model.
		$data['users'] = $this->user->get_users();
		
		//Rendering user page.
		$this->load->view('header');
		$this->load->view('user_access_control', $data);
		$this->load->view('footer');
	}

	public function username_check_ajax()
	{		
		$success_msg = "<span class='success_msg'>Available username!</span>";
		$error_msg = "<span class='error_msg'>Already used.</span>";
		$bad_username_msg = "<span class='error_msg'>Invalid Username.</span>";

		$msg = $success_msg;
		$data['result'] = 'success';

		$get = $this->input->get();

		//error case:
		if(!preg_match('/^[A-Za-z][A-Za-z0-9]{3,12}$/', $get['username']))
		{
			$msg = $bad_username_msg;
			$data['msg'] = $msg;
			$data['result'] = 'fail';
			echo json_encode($data);
			return;
		}

		//check if the username is already used.
		$this->load->model('user');
		$user = $this->user->get_user_by_username($get['username']);

		if($user)
		{
			$msg = $error_msg;
			$data['result'] = 'fail';
		}

		$data['msg'] = $msg;
		
		echo json_encode($data);
	}

	public function email_check_ajax()
	{		
		$success_msg = "";
		$error_msg = "<span class='error_msg'>Already used email.</span>";
		$bad_email_msg = "<span class='error_msg'>Invalid email.</span>";

		$msg = $success_msg;
		$data['result'] = 'success';

		$get = $this->input->get();

		//check if the email is already used.
		$this->load->model('user');
		$user = $this->user->get_user_by_email($get['email']);

		if($user)
		{
			$msg = $error_msg;
			$data['result'] = 'fail';
		}

		$data['msg'] = $msg;
		
		echo json_encode($data);
	}
}
