<?php

class ChatController extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->library('session');

	}

	function index(){

		$this->load->helper('url');
		$this->load->helper('form');

		$_SESSION['user'] = array('username'=> 'scratchy'); // DEBUG MODE LINE

 		if ( $this->session->has_userdata('user')){
			$this->load->view( 'chat/index');
		}
		else{
			// redirect to login page
		}

	}

	function receive_messages(){
		
		$this->load->helper('url');


		$data = json_decode($jsonString, true);
		// Receive a message sent via webSocket

		// update message log
		$message_log = "messageLog.json";

		$messages = json_decode(file_get_contents($message_log));

		$username = $this->session->userdata['user']['username'];

		$new_message = $this->input->post('message');

		array_push( $messages , array('username'=>$username  , 'message'=>$new_message));

		$newJsonString = json_encode();

		file_put_contents('messageLog.json', $newJsonString);

		return;
	}

	function get_messages(){
		
		$message_log = "http://localhost/messageLog.json";



	}

}