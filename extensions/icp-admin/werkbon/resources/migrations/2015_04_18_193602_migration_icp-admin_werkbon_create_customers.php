<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationIcpAdminWerkbonCreateCustomers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('extension_icpadmin_werkbon_customers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('slug');
            $table->boolean('installed');

            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('extension_icpadmin_werkbon_customers');
	}

}
