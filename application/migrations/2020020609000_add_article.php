<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Migration_add_article extends CI_Migration{

	//function we call when we want to create the table with its column
	public function up()
	{
		//create multiple columns through an array
		$this->dbforge->add_field(array(
			'article_id' => array(
				'type' => 'INT',
				'constraint' => '5',
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

			'image' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

			'paragraph' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),

			'review_id' => array(
				'type' => 'INT',
				'constraint' => '5',
			),


			//create foreign to link the two tables together


		));

		//Assign a primary key to a column
		$this->dbforge->add_key('article_id',TRUE);

		//Create the table with the specified column
		$this->dbforge->create_table('article');

	}




	// The function we call when we want to remove the table and its coulmns
	public function down()
	{
		//delete the table
		$this->dbforge->drop_table('article');
	}
}
