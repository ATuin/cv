<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{ 
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('email',200);
			$table->string('nom',200);
			$table->string('prenom',200);
			$table->string('password',200);
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
		Schema::drop('users');
	}

}