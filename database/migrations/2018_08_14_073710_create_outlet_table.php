<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOutletTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('outlet', function(Blueprint $table)
		{
			$table->char('ID_OUTLET', 20)->primary();
			$table->char('ID_PERUSAHAAN', 20)->index('FK_OUTLETNYA_MANA_SAJA');
			$table->string('NO_HP_OUTLET', 12)->nullable();
			$table->string('ALAMAT_OUTLET', 50);
			$table->string('EMAIL_OUTLET', 50);
			$table->string('FOTO_OUTLET', 256)->nullable();
			$table->boolean('IS_OUTLET_PUSAT')->nullable();
			$table->boolean('IS_OUTLET_ACTIVE')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('outlet');
	}

}
