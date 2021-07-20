<?php

class Login_Model extends CI_Model
{

	public function login_users($username,$password){
		$this->db->select('username','password');
		$this->db->from('users');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query = $this->db->get();

		return $query->result();
	}






}
