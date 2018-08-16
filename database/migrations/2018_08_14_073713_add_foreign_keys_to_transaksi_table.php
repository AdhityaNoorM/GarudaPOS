<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transaksi', function(Blueprint $table)
		{
			$table->foreign('ID_USER', 'FK_SIAPA_KASIR')->references('ID_USER')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_OUTLET', 'FK_TERJADI_PADA')->references('ID_OUTLET')->on('outlet')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transaksi', function(Blueprint $table)
		{
			$table->dropForeign('FK_SIAPA_KASIR');
			$table->dropForeign('FK_TERJADI_PADA');
		});
	}

}
