<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStokBarangOutletTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stok_barang_outlet', function(Blueprint $table)
		{
			$table->foreign('ID_VARIANSI', 'FK_BARANGNYA_APA')->references('ID_VARIANSI')->on('variansi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_OUTLET', 'FK_DI_OUTLET_MANA')->references('ID_OUTLET')->on('outlet')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stok_barang_outlet', function(Blueprint $table)
		{
			$table->dropForeign('FK_BARANGNYA_APA');
			$table->dropForeign('FK_DI_OUTLET_MANA');
		});
	}

}
