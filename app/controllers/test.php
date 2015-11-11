<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		debug("Test Controller.");
	}

	public function api_create_test()
	{
		$data = array(
			"firstname" => "TestUser"
			,"lastname" => "create"
			,"username" => "test_api_user"
			,"password" => "test_api_user"
			,"email"	=> "testapi@email.com"
		 );

		$data_string = json_encode($data);
		
		$ch = curl_init('http://seungwoochoi.com/api/user_api/users');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Content-Length:' . strlen($data_string))
		);
		
		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
		print "Status: $httpcode" . "\n";
		print "Content-Type: $contenttype" . "\n";
		print "\n" . $result . "\n";
	}

	public function api_update_test()
	{
		$data = array(
			"id"	=> 8
			,"firstname" => "TestUser"
			,"lastname" => "update"
			,"username" => "test_api_user"
			,"password" => "test_api_user"
			,"email"	=> "testapi@email.com" );

		$data_string = json_encode($data);
		
		$ch = curl_init('http://seungwoochoi.com/api/user_api/users');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Content-Length:' . strlen($data_string))
		);
		
		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
		print "Status: $httpcode" . "\n";
		print "Content-Type: $contenttype" . "\n";
		print "\n" . $result . "\n";
	}

	public function api_delete_test()
	{

		$data_string = json_encode(array('id'=>8));
		
		$ch = curl_init('http://seungwoochoi.com/api/user_api/users');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Content-Length:' . strlen($data_string))
		);
		
		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
		print "Status: $httpcode" . "\n";
		print "Content-Type: $contenttype" . "\n";
		print "\n" . $result . "\n";
	}

}
