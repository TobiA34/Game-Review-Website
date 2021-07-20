<?php

class Review extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load in the url.
		$this->load->helper('url');
		//Load in the model.
		$this->load->model('Review_Model');
		//Load in the session.
		$this->load->library('session');

	}

	public function index()
	{
		$this->load->view('review');
	}
	function reviewPage()
	{
		//create a key called result which will get the function out of the review Model
		$data['result'] = $this->Review_Model->getReviews();
		// Load the view with the view and the data
		$this->load->view('review',$data);
	}

	function chatRoomPage(){
		$this->load->view('chatPage');
	}

	public function get_comments()
	{
		$this->load->helper('cookie');


		$data = $this->input->post();
		//get the cookie username and store it in the variable
		$username = $this->input->cookie('username', TRUE);
		//store the user_id inside of the key
		$data['user_id'] = $this->Review_Model->getUserID($username);
		//get the review_id from the cookie
		$reviewID = get_cookie('ReviewID');
		//store the variable review_id inside the key
		$data['review_id'] = $reviewID;





		header('Content-Type: application/json');
		echo json_encode($data);

	}

	public function set_comments()
	{
		$this->load->helper('form');

		//store the input in the variable data
		$data = $this->input->post();
		//get the cookie username and store it in the variable
		$username = $this->input->cookie('username', TRUE);
		//store the user_id inside of the key
		$data['user_id'] = $this->Review_Model->getUserID($username);
		//get the review_id from the cookie
		$reviewID = get_cookie('ReviewID');
		//store the variable review_id inside the key
		$data['review_id'] = $reviewID;

		$this->Review_Model->insert_comments($data);
	}



    function article($slug = NULL){


		//get the article with the slug name and store it inside a key
	    $data['slug'] = $this->Review_Model->getArticle($slug);
	    //store the slug in the the temp data
	    $tempData = $data['slug'];



	    //get the first index of the review id
	    $reviewID = $tempData[0]->review_id;
	    //Set the cookie for the review ID to retrieve it easily later.
		set_cookie('ReviewID', $reviewID,36000);


		//display the comments using the slug and store it inside a key
		$data['display_comments'] = $this->Review_Model->displayComments($slug);

		//set a cookie which stores the comments
		set_cookie('display_cookie',$data['display_comments'],36000);


 		$this->load->view('article',$data);
	}
}



