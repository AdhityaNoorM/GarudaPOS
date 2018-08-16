<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOutletTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('outlet', function(Blueprint $table)
		{
			$table->foreign('ID_PERUSAHAAN', 'FK_OUTLETNYA_MANA_SAJA')->references('ID_PERUSAHAAN')->on('perusahaan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('outlet', function(Blueprint $table)
		{
			$table->dropForeign('FK_OUTLETNYA_MANA_SAJA');
		});
	}

}
