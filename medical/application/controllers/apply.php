<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class apply extends CI_Controller {

    function __construct(){
            parent::__construct();
            $this->load->model('welcome_model');
    }


    public function index()
    {
        if ($this->session->userdata('username')==""){
            redirect("signin");
        }
        
        else{   
        $this->load->view('view_apply');
        }
    }
    
    public function insert_db() {
        $appdata = array();
        $appdata['mobile'] = $this-> input-> post('mobile');
        $appdata['doctor'] = $this-> input-> post['doctor'];
        $appdata['day'] = $this-> input-> post('day');
        $appdata['time']= $this-> input-> post('time');


        $id = $this-> welcome_model-> insert_db($appdata);
                redirect('appointment');
        }
}