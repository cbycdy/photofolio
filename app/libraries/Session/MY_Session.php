<?php if (! defined('BASEPATH')) exit('No direct script access');
include_once(BASEPATH . 'libraries/Session/Session.php');

class MY_Session extends CI_Session {

	//php 5 constructor
	function __construct() {
		parent::__construct();
	}

	/**
	 *	Function to set flashdata using the message box
	 *
	 *  @since 17-May-2011
	 *  @author  Sean Choi
	 *	@access public
	*/
	public function set_message($key = array(), $text = '', $msg_type = 'info', $type = 'fade')
	{
		$msg_types = array('error', 'success', 'warning', 'info', 'standard');
		$msg_type = (in_array($msg_type, $msg_types)) ? $msg_type : 'standard';
		$msg_type = 'style: "'.$msg_type.'"';
		$type = $type == 'sticky' ? 'sticky' : 'fade';
		
		$msg = '';

		if($type === 'fade'){
			$msg = '$.jGrowl("'.$text.'", {' . $msg_type . '});';
		}

		elseif($type === 'sticky')
		{
			$msg = '$.jGrowl("'.$text.'", {sticky: true, ' . $msg_type . '});';
		}

		elseif($type === 'long')
		{
			$msg = '$.jGrowl("'.$text.'", {life: 10000, ' . $msg_type . '});';
		}


		$this->set_flashdata($key, $msg);
	}


	/**
	 *	Functiont to display set message box
	 *
	 *  @since 17-May-2011
	 *  @author  Sean Choi
	 *	@access public
	*/
	public function message($key)
	{
		return $this->flashdata($key);
	}

			

	/**
	 *	Function to keep a message
	 *
	 *  @since 17-May-2011
	 *  @author  Sean Choi
	 *	@access public
	*/
	public function keep_message($key)
	{
		$this->keep_flashdata($key);
	}

}

/* End of file: MY_Session.php */ 


