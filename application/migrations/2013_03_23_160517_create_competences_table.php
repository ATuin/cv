<?php

class Create_Competences_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('competences', function($table)
		{   
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('nom',200);
			$table->integer('niveau')->nullable();
			$table->integer('categorie_id')->unsigned();
			$table->timestamps();
			$table->foreign('categorie_id')->references('id')->on('categories');
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
		Schema::drop('competences');
	}

}