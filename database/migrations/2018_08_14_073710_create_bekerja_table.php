<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBekerjaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bekerja', function(Blueprint $table)
		{
			$table->char('ID_USER', 20);
			$table->char('ID_OUTLET', 20)->index('FK_BEKERJA2');
			$table->primary(['ID_USER','ID_OUTLET']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bekerja');
	}

}
