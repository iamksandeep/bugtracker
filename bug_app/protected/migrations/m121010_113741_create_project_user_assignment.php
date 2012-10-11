<?php

class m121010_113741_create_project_user_assignment extends CDbMigration
{
	public function up()
	{
		$this->createTable('project_user_assignment',array(
		'project_id' => 'Int(11) NOT NULL',
		'user_id' => 'Int(11) NOT NULL',
		'create_time' => 'DATETIME',
		'create_user_id' => 'INTEGER',
		'update_time' => 'DATETIME',
		'update_user_id' => 'INTEGER',
		'PRIMARY KEY(project_id, user_id)',
		), 'ENGINE = InnoDB');

		$this->addForeignKey( 'FK_project_user', 'project_user_assignment', 'project_id',
	                              'project', 'id', 'CASCADE', 'RESTRICT' );
		$this->addForeignKey( 'FK_user_project', 'project_user_assignment', 'user_id',
	                              'user', 'id', 'CASCADE', 'RESTRICT' );

		
	}

	public function down()
	{	
		$this->dropForeignKey( 'FK_user_project', 'project_user_assignment' );
		$this->dropForeignKey( 'FK_project_user', 'project_user_assignment' );
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