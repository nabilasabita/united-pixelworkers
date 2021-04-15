<?php

class login_controller extends CI_Controller{



	function index(){
		$this->load->view('login_view');
	}

	function register(){
		$this->load->view('signup_view');
	}


}