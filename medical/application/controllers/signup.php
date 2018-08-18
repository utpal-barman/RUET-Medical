<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');
	}


	public function index()
	{
		$this->load->view('view_signup');
	}


	public function register()
	{
		$data = array();
                                       $data['id']     = $this-> input-> post('id');
		$data['name']     = $this-> input-> post('name');
		$data['mobile'] = $this-> input-> post('mobile');
		$data['username'] = $this-> input-> post('username');
		$data['password'] = md5($this-> input-> post('password'));

		if(empty($data['id']) || empty($data['name']) || empty($data['mobile']) ||empty($data['username']) || empty($data['password'])){
			$sdata['not_success_msg'] = "প্রতিটি ঘর ঠিকভাবে পুরণ করুন!";
			$this->session->set_userdata($sdata);
			redirect('signup');
		}

		else{
			$id = $this-> welcome_model-> register_user($data);
			if($id) {
				$sdata['success_msg'] = "Successfully registered";
                                                                             $data['username'] = $this-> session-> userdata['username'];
				$this-> session-> set_userdata($sdata);
				redirect('stu_main');
			}	
		}
	}

}