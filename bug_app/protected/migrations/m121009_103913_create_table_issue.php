<?php

class m121009_103913_create_table_issue extends CDbMigration
{
	public function up()
	{
		
		 $this->createTable('issue', array(
		'id' => 'INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT',
		'name' => 'varchar(256) NOT NULL',
		'description' => 'varchar(2000)',
		'project_id' => 'INTEGER',
		'type_id'  => 'INTEGER',
		'status_id' => 'INTEGER',
		'owner_id' => 'INTEGER',
		'requester_id' => 'INTEGER',
		'create_time' => 'DATETIME',
		'create_user_id' => 'INTEGER',
		'update_time' => 'DATETIME',
		'update_user_id'=> 'INTEGER'
		 ),'ENGINE=InnoDB');
		
		//$this->addForeignKey('fk_issue_project', 'issue', 'project_id', 'project', 'id', 'CASCADE', 'RESTRICT' );
		//$this->addForeignKey('fk_issue_owner', 'issue', 'owner_id', 'user', 'id', 'CASCADE', 'RESTRICT' );
		//$this->addForeignKey('fk_issue_requester', 'issue', 'requester_id', 'user', 'id', 'CASCADE', 'RESTRICT' );

		
	}

	public function down()
	{	
		//$this->dropForeignKey('fk_issue_project','issue');
		//$this->dropForeignKey('fk_issue_owner','issue');
		//$this->dropForeignKey('fk_issue_requester','issue');
		$this->drop(issue);
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