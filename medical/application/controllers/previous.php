<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class previous extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('welcome_model');
	}


    public function index()
    {
        $data['filtering'] = $this -> welcome_model -> show_appointments();

        if ($this->session->userdata('username')==""){
            redirect("signin");
        }
        else{
            $this->load->view('view_previous',$data);
        }
    }

    public function fsearch()
    {
        $data['filtering'] = $this -> welcome_model -> filter_search();

        if ($this->session->userdata('username')==""){
            redirect("signin");
        }
        else{
            $this->load->view('view_previous',$data);
            redirect('previous');
        }
    }


}