<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discount', function(Blueprint $table)
		{
			$table->char('ID_DISKON', 20)->primary();
			$table->char('ID_OUTLET', 20)->index('FK_PUNYA_DISKON_APA');
			$table->date('START_DATE');
			$table->date('END_DATE');
			$table->boolean('IS_ACTIVE');
			$table->float('TOTAL_DISKON', 10, 0);
			$table->string('DISC_DESC', 256)->nullable();
			$table->string('NAMA_DISKON', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discount');
	}

}
