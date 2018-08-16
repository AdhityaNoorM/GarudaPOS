<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBekerjaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bekerja', function(Blueprint $table)
		{
			$table->foreign('ID_USER', 'FK_BEKERJA')->references('ID_USER')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_OUTLET', 'FK_BEKERJA2')->references('ID_OUTLET')->on('outlet')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bekerja', function(Blueprint $table)
		{
			$table->dropForeign('FK_BEKERJA');
			$table->dropForeign('FK_BEKERJA2');
		});
	}

}
