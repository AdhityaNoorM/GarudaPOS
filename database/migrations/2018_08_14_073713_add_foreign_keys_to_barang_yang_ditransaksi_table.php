<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBarangYangDitransaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('barang_yang_ditransaksi', function(Blueprint $table)
		{
			$table->foreign('ID_VARIANSI', 'FK_BARANGNYA')->references('ID_VARIANSI')->on('variansi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_TRANSAKSI', 'FK_TRANSAKSI_YANG')->references('ID_TRANSAKSI')->on('transaksi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('barang_yang_ditransaksi', function(Blueprint $table)
		{
			$table->dropForeign('FK_BARANGNYA');
			$table->dropForeign('FK_TRANSAKSI_YANG');
		});
	}

}
