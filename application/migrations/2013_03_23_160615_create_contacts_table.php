<?php

class Create_Contacts_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function($table)
		{ 
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('email',200);
			$table->string('nom',200);
			$table->string('prenom',200);
			$table->text('contenu');
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
		Schema::drop('contacts');
	}

}