<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVariansiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('variansi', function(Blueprint $table)
		{
			$table->foreign('ID_PRODUK', 'FK_MEMILIKI_VARIAN')->references('ID_PRODUK')->on('produk')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('variansi', function(Blueprint $table)
		{
			$table->dropForeign('FK_MEMILIKI_VARIAN');
		});
	}

}
