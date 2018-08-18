<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');
	}


	public function index()
	{
		$this->load->view('view_signin');
	}

	public function login_index()
	{
        $this->load->library('session');
        $this->session->set_userdata('username','Username');
        $sdata = array();
		$username = $this-> input-> post('username');
		$password = $this-> input-> post('password');


		$id = $this-> welcome_model-> verify_user($username,md5($password));
		if(!empty($id)){
			$sdata['username'] = $id-> username;
			$this-> session-> set_userdata($sdata);
			redirect('stu_main');
		}	
		else{
			$sdata['error_msg'] = "ইউজারনেম অথবা পাসওয়ার্ড ভুল!";
			$this-> session-> set_userdata($sdata);
			redirect('signin');
		}

	}
        
        public function logout() {
            $this->load->library('session');
            $this->session->unset_userdata('username');
            redirect('home');
        }
}