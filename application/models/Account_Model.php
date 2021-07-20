<?php

class Account_Model extends CI_Model
{

	public function getAccountDetails(){
 		$username = $this->session->userdata('username');
		// select all the columns
		$this->db->select('*');
		// get the table users
		$this->db->from('users');
		//where the username is equal to the username which is defined as a parameter
		$this->db->where('username',$username);
		//get the database and store it in the query variable
		$query = $this->db->get();
			return $query->result();
	}

	public function getDetails($review_id){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where("review_id = '$review_id'");
	}



	public function isAdmin($username) {

		$this->db->query("SELECT isAdmin FROM users WHERE isAdmin ='$username'");

	}

	public function darkmode($username){

		$this->db->query("SELECT darkmode FROM users WHERE username ='$username'");

	}




}
