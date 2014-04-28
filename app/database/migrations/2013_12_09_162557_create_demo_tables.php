<?php

use Illuminate\Database\Migrations\Migration;

class CreateDemoTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DEMO_Invoice', function($table)
		{
			$table->increments('id');
			$table->string('client',100);
			$table->integer('number');
			$table->date('date');											
			
			//Timestamps
			$table->timestamps(); //Adds created_at and updated_at columns
			$table->softDeletes(); //Adds deleted_at column for soft deletes
		});
		
		Schema::create('DEMO_Invoice_Item', function($table)
		{
			$table->increments('id');
			$table->string('description',100);
			$table->float('unitCost');
			$table->integer('quantity');
			$table->float('total');
			
			//Foreign Keys
			$table->unsignedInteger('invoice');
			$table->foreign('invoice')->references('id')->on('DEMO_Invoice');
			
			//Timestamps
			$table->timestamps(); //Adds created_at and updated_at columns
			$table->softDeletes(); //Adds deleted_at column for soft deletes

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('DEMO_Invoice');
		
		Schema::dropIfExists('DEMO_Invoice_Item');
	}

}