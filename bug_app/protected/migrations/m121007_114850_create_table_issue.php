<?php

class m121007_114850_create_table_issue extends CDbMigration
{
	public function up()
	{
		$this->createTable('issue', array(
            'id' => 'pk',
			'project_id' => 'integer',
            'name' => 'string NOT NULL',
			'detail' =>'text',
        ));
	
	}
	public function addForeignKey($name, $table, $columns, $refTable, $refColumns, $delete=CASCADE, $update=CASCADE)
	{
		
	$this->getDbConnection()->createCommand()->addForeignKey('project_id', 'issue', 'project_id',  'project', 'id', $delete, $update);
		
	}
	
	public function down()
	{
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