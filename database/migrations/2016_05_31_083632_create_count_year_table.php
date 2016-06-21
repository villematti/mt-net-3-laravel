<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count_year', function (Blueprint $table) {
			$table->integer('count_id')->unsigned();
			$table->integer('year_id')->unsigned();
            $table->timestamps();
        });
		
		Schema::table('count_year', function (Blueprint $table) {
			$table->foreign('count_id')->references('id')->on('counts');
			$table->foreign('year_id')->references('id')->on('years');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('count_year');
    }
}
