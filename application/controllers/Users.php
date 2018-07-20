<?php if (!defined('BASEPATH')) exit('No direct script allowed !');

class Users extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }

    /** 
     *user information
     */

    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')) {
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load views
            $this->load->view('users/account', $data);
        }
    }

    /** 
     * Login
     */

     public function login() {
         $data = array();

         if($this->session->userdata('success')) {
            $data['success'] = $this->session->userdata('success');
            $this->session->unset_userdata('success');
         }

         if($this->session->userdata('success')) {
            $data['error'] = $this->session->userdata('error');
            $this->session->unset_userdata('error');
         }
     }

}