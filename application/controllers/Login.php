<?php
 class Login extends CI_Controller
 {

	 public function __construct()
	 {
		 parent::__construct();
		 //Load in the model.
		 $this->load->helper('url');
		 $this->load->model('Login_Model');
		 $this->load->library('session');

	 }

	 public function index()
	 {

	 	//load view login
		 $this->load->view('login');

	 }





	 public function loginPage()
	 {
		//load view login
		 $this->load->view('login');

	 }

	 public function adminPage()
	 {
		//load view admin
		 $this->load->view('admin');

	 }


	 public function checkLogin()
	 {
		 $this->load->helper(array('form', 'url'));
		 $this->load->helper('cookie');
		 $this->load->library('form_validation');


		 // set validation for username and password
		 $this->form_validation->set_rules('username', 'Username', 'required');
		 $this->form_validation->set_rules('password', 'Password', 'required');

		 //get post from username and password input field and store it in a variable
		 $username = $this->input->post('username');
		 $password = $this->input->post('password');

		 // Use the variable to pass through as a parameter from the function login users from the login model and store it in user variable
		 $user = $this->Login_Model->login_users($username,$password);

		 //check to see if user is null then display message and redirect them to the login page
		 if ($user  == null) {

			 $this->load->view('login');
			 echo "<h2>Your Account is Invalid</h2>";

 		 } else {
		 	// create an array which holds the username and password
			 $newdata = array(
				 'username'  => $username,
				 'password'  => $password,

			 );
			//then set the session
			 $this->session->set_userdata($newdata);
			 //set the cookie username
			 set_cookie('username', $username ,36000);


			 $this->load->view('account');
			 $this->session->set_userdata($user);


		 }

	 }

	 public function logout()
	 {
		 //removing session
		 $this->session->sess_destroy();
		 redirect("login");

	 }




}





