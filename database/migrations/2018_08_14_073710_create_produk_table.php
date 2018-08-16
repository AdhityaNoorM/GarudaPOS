<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdukTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk', function(Blueprint $table)
		{
			$table->char('ID_PRODUK', 20)->primary();
			$table->char('ID_PERUSAHAAN', 20)->index('FK_PRODUK_PUNYA');
			$table->string('PRODUK_TITLE', 50);
			$table->boolean('IS_AVAILABLE');
			$table->date('DATE_PRODUK_CREATED');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produk');
	}

}
