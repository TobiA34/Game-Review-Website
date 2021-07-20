<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Migration_add_review extends CI_Migration{

	//function we call when we want to create the table with its column
	public function up()
	{
		//create multiple columns through an array
		$this->dbforge->add_field(array(
			'review_id' => array(
				'type' => 'INT',
				'constraint' => '5',
				'auto_increment' => TRUE
			),
			'review' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

			'game' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

			'console' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

			//create foreign to link the two tables together

		));

		//Assign a primary key to a column
		$this->dbforge->add_key('review_id',TRUE);

		//Create the table with the specified column
		$this->dbforge->create_table('reviews');

	}




	// The function we call when we want to remove the table and its coulmns
	public function down()
	{
		//delete the table
 		$this->dbforge->drop_table('review');
	}
}
