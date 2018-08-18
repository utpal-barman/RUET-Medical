<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class success extends CI_Controller {

	function __construct(){
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('view_success');
	}

}