<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appointment extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('welcome_model');
    }

    public function index(){
        
        $data['appoint'] = $this -> welcome_model -> show_appointments();
        if ($this->session->userdata('username')==""){
            redirect("signin");
        }
        else{
        $this->load->view('view_appointment', $data);
        }
    }
        

}