<?php

class m121009_105301_create_table_user extends CDbMigration
{
	public function up()
	{
		$this->createTable('user', array(
		'id' => 'pk',
		'email' => 'Varchar(256) NOT NULL',
		'username' => 'Varchar(256)',
		'password'  => 'Varchar(256)',
		'last_login_time'  => 'Datetime',
		'create_time'  => ' DATETIME',
		'create_user_id'  => 'INTEGER',
		'update_time'   => 'DATETIME',
		'update_user_id' => 'INTEGER'
		 ),'ENGINE=InnoDB');
	}

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