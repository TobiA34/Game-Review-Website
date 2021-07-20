<?php
class Account extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load in the model.
		$this->load->helper('url');
		$this->load->model('Account_Model');
		$this->load->library('session');
	}

	public function index()
	{

		$this->load->view('account');

	}




	public function AccountPage()
	{
		//load view account
  		$this->load->view('account');

	}



	public function isAdmin(){

		$username = $this->session->userdata('username');
		$isAdmin = $this->Account_Model->isAdmin($username);

		if ($isAdmin == 1){

			$data['backgroundBlack'] = "<style> body{background-color: gray()} </style>";
			$data['textColor'] = "<style> body{background-color: white} </style>";


			$this->load->view('account',$data);


		} else{

			$data['backgroundBlack'] = "<style> body{background-color: white} </style>";
			$data['textColor'] = "<style> body{color: black} </style>";


			$this->load->view('account',$data);
		}


	}
	public function darkmode(){
		$username = $this->session->userdata('username');
		$darkmode= $this->Account_Model->darkmode($username);

		if ($darkmode == 1){



		} else{

		}

	}



	public function getDetails()
	{
		//load the form,url and cookie helper
		$this->load->helper(array('form', 'url','cookie'));
		$this->load->library('form_validation');



		// set up session username
		$username = $this->session->userdata('username');
		//store function from model inside of the variable
		$userDetails = $this->Account_Model->getAccountDetails($username);
		//store the account details in a key to be accessed anywhere
        $data['accountResults'] = $userDetails;

		if($userDetails == null){
			echo "nothing found";
		}else{
			echo "something found";

		}

		}


}


