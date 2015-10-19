<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Responsive_web_design extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('responsive_web_design');
		$this->load->view('footer');
	}
}
