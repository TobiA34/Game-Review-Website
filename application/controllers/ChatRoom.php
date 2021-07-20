<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class ChatRoom extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load in the model.
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('chatPage');

	}


	public function chatPage()
	{
		//load the view chat page
		$this->load->view('chatPage');
	}


}


