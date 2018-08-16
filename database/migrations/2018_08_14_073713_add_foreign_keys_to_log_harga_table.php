<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogHargaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('log_harga', function(Blueprint $table)
		{
			$table->foreign('ID_VARIANSI', 'FK_BARANG_LOGNYA')->references('ID_VARIANSI')->on('variansi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_OUTLET', 'FK_LOG_OUTLET')->references('ID_OUTLET')->on('outlet')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('log_harga', function(Blueprint $table)
		{
			$table->dropForeign('FK_BARANG_LOGNYA');
			$table->dropForeign('FK_LOG_OUTLET');
		});
	}

}
