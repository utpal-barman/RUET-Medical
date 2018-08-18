<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stu_main extends CI_Controller {

    function __construct(){
            parent::__construct();
    }


    public function index() {
        if ($this->session->userdata('username')==""){
            redirect("signin");
        }
        else{
        $this->load->view('view_stu_main');
        }
    }

}
