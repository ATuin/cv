<?php

class Create_Experiences_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experiences', function($table)
		{ 
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('nom',200);
			$table->text('adresse')->nullable();
			$table->string('site',200)->nullable();
			$table->text('description');
			$table->date('debut')->nullable();
			$table->date('fin')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('experiences');
	}

}