<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerusahaanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perusahaan', function(Blueprint $table)
		{
			$table->char('ID_PERUSAHAAN', 20)->primary();
			$table->string('ALAMAT_PERUSAHAAN', 50);
			$table->string('NO_TELP_PERUSAHAAN', 12)->nullable();
			$table->string('NAMA_PERUSAHAAN', 50);
			$table->string('LOGO', 256)->nullable();
			$table->string('DESKRIPSI_PERUSAHAAN', 1024)->nullable();
			$table->string('EMAIL_PERUSAHAAN', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('perusahaan');
	}

}
