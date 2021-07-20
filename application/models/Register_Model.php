<?php
class Register_Model extends CI_Model
{

	public function insert_user($data){
		$this->db->insert('users',$data);
	}

	public function select_users(){

		$this->db->select('username','user_id');
		$this->db->from('users');
		$this->db->where('user_id = 1');

		$query = $this->db->get();

		return $query->result();

	}

}
