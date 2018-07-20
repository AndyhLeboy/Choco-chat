<?php 

class Pages extends CI_Controller{
	public function index(){
		echo "<h1>Hello World!</h1>";
 	}
 	public function home(){
 		$msg = 'I am a genius';
 		echo "<h1>$msg</h1>";
 	}
 }?>
