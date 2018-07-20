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

         if($this->input->post('loginSubmit')) {
             $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
             $this->form_validation->set_rules('password', 'password', 'required');
             if ($this->form_validation->run() == true) {
                $connect['returnType'] = 'single';
                $connect['condition'] = array(
                    'email'    =>$this->input->post('email'),
                    'password' =>$this->input->post('password'),
                    'status'   => '1'
                );
                $check = $this->user->getRows($connect);
                if ($check) {
                    $this->session->set_userdata('isUserLoggedIn', TRUE);
                    $this->session->set_userdata('userId', $check['id']);
                    redirect('users/account/');
                } else {
                    $data['error'] = 'Worng password or email, please try again';
                }
             }     
         }
        //load view
        $this->load->view('users/login', $data);
     }

}