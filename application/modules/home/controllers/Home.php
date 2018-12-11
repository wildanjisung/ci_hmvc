<?php

class Home extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		$this->load->view('welcome_message');
		// echo "welcome";
	}
}
