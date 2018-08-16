<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdukTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produk', function(Blueprint $table)
		{
			$table->foreign('ID_PERUSAHAAN', 'FK_PRODUK_PUNYA')->references('ID_PERUSAHAAN')->on('perusahaan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produk', function(Blueprint $table)
		{
			$table->dropForeign('FK_PRODUK_PUNYA');
		});
	}

}
