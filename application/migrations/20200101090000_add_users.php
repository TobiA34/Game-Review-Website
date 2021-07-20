<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Migration_add_users extends CI_Migration{

	//function we call when we want to create the table with its column
	public function up()
	{
		//create multiple columns through an array
		$this->dbforge->add_field(array(
			'user_id' => array(
				'type' => 'INT',
				'constraint' => '5',
				'auto_increment' => TRUE
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'password' => array(
				'type' => 'TEXT',
				'constraint' => '100',
				'null' => TRUE
			),
			'firstname' => array(
				'type' => 'TEXT',
				'constraint' => '100',
				'null' => TRUE
			),
			'lastname' => array(
				'type' => 'TEXT',
				'constraint' => '100',
				'null' => TRUE
			),
			'email' => array(
				'type' => 'TEXT',
				'constraint' => '100',
				'null' => TRUE
			),
			'telephone' => array(
				'type' => 'VARCHAR',
				'constraint' => '16',
				'null' => TRUE
			),
			'dob' => array(
				'type' => 'DATE',
//				'constraint' => '100',
				'null' => TRUE
			),
		));

		//Assign a primary key to a column
		$this->dbforge->add_key('user_id',TRUE);

		//Create the table with the specified column
		$this->dbforge->create_table('users');
	}





	// The function we call when we want to remove the table and its coulmns
	public function down()
	{
		//delete the table
		$this->dbforge->drop_table('users');
 	}
}
