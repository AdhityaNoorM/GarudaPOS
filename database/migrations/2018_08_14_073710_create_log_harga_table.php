<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogHargaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_harga', function(Blueprint $table)
		{
			$table->char('ID_OUTLET', 20);
			$table->char('ID_VARIANSI', 20)->index('FK_BARANG_LOGNYA');
			$table->float('LOG_HARGA_JUAL', 10, 0);
			$table->float('LOG_HARGA_MODAL', 10, 0);
			$table->date('LOG_HARGA_TANGGAL');
			$table->primary(['ID_OUTLET','ID_VARIANSI']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_harga');
	}

}
