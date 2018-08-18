<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome_model extends CI_Model {

    function __construct(){
            parent::__construct();
    }

    function verify_user($username,$password){
            $this-> db-> SELECT('*');
            $this-> db-> WHERE('username',$username);
            $this->db->WHERE('password',$password);
            $flag = $this->db->get('stu_table')->row();

            return $flag;
    }

    function register_user($data){
        $this->db->set($data);
        $id = $this->db->insert('stu_table');
        return $id;
    }
    
    function show_appointments() {
         $query = $this->db->get('info');  
         return $query->result(); 
    }
    
    function insert_db($appdata){
        $this->db->set($appdata);
        $id = $this->db->insert('info');
        return $id;
    }

    function filter_search(){
        $input_number = $this->input->post('input_mobile');
        $query = $this->db->query('SELECT * FROM info WHERE mobile = ?',
                                   array($input_number));
        return $query->result();

    }
        


}