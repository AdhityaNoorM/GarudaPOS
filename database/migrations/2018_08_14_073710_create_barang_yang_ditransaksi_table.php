<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarangYangDitransaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barang_yang_ditransaksi', function(Blueprint $table)
		{
			$table->char('ID_VARIANSI', 20);
			$table->char('ID_TRANSAKSI', 20)->index('FK_TRANSAKSI_YANG');
			$table->integer('JUMLAH_BARANG_TRANSAKSI');
			$table->float('SUB_TOTAL_MODAL', 10, 0);
			$table->float('SUB_TOTAL_HARGA', 10, 0);
			$table->primary(['ID_VARIANSI','ID_TRANSAKSI']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('barang_yang_ditransaksi');
	}

}
