<?php

class Create_Portfolios_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolios', function($table)
		{ 
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('titre',200);
			$table->text('description');
			$table->string('screenshot',200);
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
		Schema::drop('portfolios');
	}

}