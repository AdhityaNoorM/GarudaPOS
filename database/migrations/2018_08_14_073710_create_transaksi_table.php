<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaksi', function(Blueprint $table)
		{
			$table->char('ID_TRANSAKSI', 20)->primary();
			$table->char('ID_OUTLET', 20)->index('FK_TERJADI_PADA');
			$table->char('ID_USER', 20)->index('FK_SIAPA_KASIR');
			$table->dateTime('TANGGAL_TRANSAKSI');
			$table->float('TOTAL_HARGA_TRANSAKSI', 10, 0);
			$table->float('TOTAL_PEMBAYARAN', 10, 0);
			$table->float('BIAYA_TAMBAHAN', 10, 0)->nullable();
			$table->float('ADDED_DISKON', 10, 0)->nullable();
			$table->boolean('METODE_PEMBAYARAN');
			$table->string('EMAIL_PEMBELI', 50)->nullable();
			$table->boolean('IS_CASH')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transaksi');
	}

}
