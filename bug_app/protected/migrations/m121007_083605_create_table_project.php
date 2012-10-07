<?php

class m121007_083605_create_table_project extends CDbMigration
{
	public function up()
	{
		
	}

	public function down()
	{
		$this->dropTable("project");
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