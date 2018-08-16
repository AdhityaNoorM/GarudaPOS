<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->char('ID_USER', 20)->primary();
			$table->char('ID_PERUSAHAAN', 20)->index('FK_TERDAPAT');
			$table->string('NAMA_USER', 50);
			$table->char('PASSWORD_USER', 32);
			$table->integer('HAK_AKSES_USER');
			$table->string('JABATAN', 50);
			$table->string('EMAIL_USER', 50);
			$table->string('NO_HP_USER', 12)->nullable();
			$table->string('FOTO', 256)->nullable();
			$table->boolean('IS_USER_ACTIVE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
