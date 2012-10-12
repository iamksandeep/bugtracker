<?php

class m121009_105159_create_table_project_user_assignment extends CDbMigration
{
	public function up()
	{
		 $this->createTable('project_user_assignment', array(
		'project_id' => 'pk',
		'user_id' => 'Int(11) NOT NULL',
		'create_time' => 'DATETIME',
		'create_user_id' => 'INTEGER',
		'update_time' => 'DATETIME',
		'update_user_id' => 'INTEGER',
		 ),'ENGINE=InnoDB');

		 //$this->addForeignKey('fk_project_user', 'project_user_assignment', 'project_id', 'project', 'id', 'CASCADE', 'RESTRICT' );
		 //$this->addForeignKey('fk_user_project', 'project_user_assignment', 'user_id', 'user', 'id', 'CASCADE', 'RESTRICT' );
		
	}

	public function down()
	{
		//$this->dropForeignKey('fk_project_user','project_user_assignment');
		//$this->dropForeignKey('fk_user_project','project_user_assignment');
		$this->dropTable('project_user_assignment');

	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}