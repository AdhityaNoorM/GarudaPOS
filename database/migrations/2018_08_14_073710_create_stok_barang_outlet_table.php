<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStokBarangOutletTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stok_barang_outlet', function(Blueprint $table)
		{
			$table->char('ID_VARIANSI', 20);
			$table->char('ID_OUTLET', 20)->index('FK_DI_OUTLET_MANA');
			$table->float('HARGA_JUAL', 10, 0);
			$table->integer('STOK')->nullable();
			$table->float('HARGA_MODAL', 10, 0);
			$table->integer('STOK_MINIMUM')->nullable();
			$table->primary(['ID_VARIANSI','ID_OUTLET']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stok_barang_outlet');
	}

}
