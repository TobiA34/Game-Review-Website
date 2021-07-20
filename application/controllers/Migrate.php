<?php
defined('BASEPATH') OR exit('no direct  allowed');

class Migrate extends CI_Controller {

	public function index()
	{
		//Load in the Library when we visit the page
		//If this controller contained multiple functions, we would load it into a constructor
		$this->load->library('migration');

		//$this->migration->current() = timestamp;

		if ($this->migration->current() === FALSE)
		{
			//A CodeIgniter function used for displaying the full PHP error on a page
			show_error($this->migration->error_string());
		}
	}
}
