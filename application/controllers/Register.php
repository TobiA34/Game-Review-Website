<?php

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load in the model.
		$this->load->helper('url','cookie');
		$this->load->model('Register_Model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('register');

	}
	function registerPage()
	{
		$this->load->view('register');
	}




	public function auto_insert()
	{
		//store the values in a key which can then be passed through as a parameter inside the insert user function
		$username = $data['username'] = $this->input->post('username');
		$password = $data['password'] = $this->input->post('password');
		$telephone = $data['telephone'] = $this->input->post('telephone');
		$email = $data['email'] = $this->input->post('email');
		$dob = $data['dob'] = $this->input->post('dob');
		$firstname = $data['firstname'] = $this->input->post('first_name');
		$lastname = $data['lastname'] = $this->input->post('last_name');



		$this->Register_Model->insert_user($data);








		$this->load->view('login');


	}




}



