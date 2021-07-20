<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Migration_add_comment extends CI_Migration{

	//function we call when we want to create the table with its column
	public function up()
	{
		//create multiple columns through an array
		$this->dbforge->add_field(array(
			'comment_id' => array(
				'type' => 'INT',
				'constraint' => '5',
				'auto_increment' => TRUE
			),
			'comments' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

			'user_id' => array(
				'type' => 'INT',
				'constraint' => '10',
			),

			'review_id' => array(
				'type' => 'INT',
				'constraint' => '10',
			),
			'article_id' => array(
				'type' => 'INT',
				'constraint' => '10',
			),
			//create foreign to link the two tables together

		));

		//Assign a primary key to a column
		$this->dbforge->add_key('comment_id',TRUE);

		//Create the table with the specified column
		$this->dbforge->create_table('comments');

	}




	// The function we call when we want to remove the table and its coulmns
	public function down()
	{
		//delete the table
		$this->dbforge->drop_table('comments');
	}
}
