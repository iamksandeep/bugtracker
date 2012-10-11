<?php

class m121010_062418_create_table_issue extends CDbMigration
{
	public function up()
	{
		$this->createTable('issue', array(
			'id' => 'pk',
			'name' => 'varchar(256) NOT NULL',
			'description' =>'varchar(2000)',
			'project_id' =>'INTEGER',
			'type_id' =>'INTEGER',
			'status_id'=>'INTEGER',
			'owner_id'=>'INTEGER',
			'requester_id'=>'INTEGER',
			'create_time'=>'DATETIME',
			'create_user_id'=>'INTEGER',
			'update_time' =>'DATETIME',
			'update_user_id'=>'INTEGER',
			), 'ENGINE = InnoDB'
			);

		$this->addForeignKey( 'FK_issue_project', 'issue', 'project_id',
	                              'project', 'id', 'CASCADE', 'RESTRICT' );
		$this->addForeignKey( 'FK_issue_owner', 'issue', 'owner_id',
	                              'user', 'id', 'CASCADE', 'RESTRICT' );
		$this->addForeignKey( 'FK_issue_requester', 'issue', 'requester_id',
	                              'user', 'id', 'CASCADE', 'RESTRICT' );
	
	}

	public function down()
	{	
		$this->dropForeignKey( 'FK_issue_requester', 'issue' );
		$this->dropForeignKey( 'FK_issue_owner', 'issue' );
		$this->dropForeignKey( 'FK_issue_project', 'issue' );
		$this->dropTable('issue');
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