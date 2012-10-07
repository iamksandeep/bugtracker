<?php

class m121007_083605_create_table_project extends CDbMigration
{
	public function up()
	{
		 $this->createTable('project', array(
		    'id' => 'pk',
		    'name' => 'string NOT NULL',
		    'description' =>'TEXT',
		    'create_time' =>'DATETIME',
		    'create_user_id' =>'INTEGER',
		    'update_time' =>'DATETIME',
		    'update_user_id' =>'INTEGER',
        ));
	
	}

	public function down()
	{
		$this->dropTable('project');
		
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