<?php

class m121010_060344_create_table_user extends CDbMigration
{
	public function up()
	{
	$this->createTable('user', array(
		'id' => 'pk',
		'email' => 'Varchar(256) NOT NULL',
		'username' => 'Varchar(256)',
		'username' => 'Varchar(256)',
		'username' => 'Varchar(256)',
		'password' => 'Varchar(256)',
		'last_login_time' => 'DATETIME',
		'create_time'  => 'DATETIME',
		'create_user_id'  => 'INTEGER',
		'update_time'  => 'DATETIME',
		'update_user_id' => 'INTEGER',
		), 'ENGINE=InnoDB');
	/*$this->createTable('user', array(
					'id' => 'pk',
					'name_first' => 'string not null',
					'name_last' => 'string not null',
					'email' => 'string not null',
					'password' => 'string not null',
				), 'ENGINE=InnoDB');*/
	}

	/*$this->createTable('user', array(
					'id' => 'pk',
					'name_first' => 'string not null',
					'name_last' => 'string not null',
					'email' => 'string not null',
					'password' => 'string not null',
				), 'ENGINE=InnoDB'); */
	

	public function down()
	{
		$this->dropTable('user');
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