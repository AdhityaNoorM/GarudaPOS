<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiscountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('discount', function(Blueprint $table)
		{
			$table->foreign('ID_OUTLET', 'FK_PUNYA_DISKON_APA')->references('ID_OUTLET')->on('outlet')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('discount', function(Blueprint $table)
		{
			$table->dropForeign('FK_PUNYA_DISKON_APA');
		});
	}

}
