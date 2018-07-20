<?php 
class new_model extends CI_Model{
	/* 
	 * 
	 */

	public $table ='';
	public	function __contruct(){
		$this->load->database();
	}
	public function add(){
		$this->load->database();
	}
}

?>