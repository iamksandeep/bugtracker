<?php

class m121007_114850_create_table_issue extends CDbMigration
{
	public function up()
	{
		$this->createTable('issue', array(
            'id' => 'pk',
			'project_id' => 'integer NOT NULL',
            'name' => 'string NOT NULL',
			'detail' =>'text',
        ),'ENGINE=InnoDB');

    $this->addForeignKey( 'fk_project_id', 'issue', 'project_id', 'project', 'id', 'CASCADE', 'CASCADE' );
	
	}
	//public void addForeignKey(string $name, string $table, string $columns, string $refTable, string $refColumns, string $delete=NULL, string $update=NULL)
	
	public function down()
	{
		$this->dropForeignKey('fk_project_id','issue');
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