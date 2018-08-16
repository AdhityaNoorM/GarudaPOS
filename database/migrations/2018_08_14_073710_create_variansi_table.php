<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVariansiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('variansi', function(Blueprint $table)
		{
			$table->char('ID_VARIANSI', 20)->primary();
			$table->char('ID_PRODUK', 20)->index('FK_MEMILIKI_VARIAN');
			$table->string('SKU', 20);
			$table->string('NAMA_VARIAN', 50)->nullable();
			$table->string('KET_VARIAN', 50)->nullable();
			$table->boolean('IS_VAR_AVAILABLE');
			$table->date('DATE_VARIAN_CREATED');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('variansi');
	}

}
