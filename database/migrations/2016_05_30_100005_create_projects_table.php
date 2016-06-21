<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->integer('version');
			$table->integer('projectType_id')->unsigned();
			$table->integer('projectStatus_id')->unsigned();
			$table->integer('year_id')->unsigned();
			$table->integer('count_id')->unsigned();
            $table->timestamps();
        });
		
		Schema::table('projects', function (Blueprint $table) {
			$table->foreign('projectType_id')->references('id')->on('projectTypes');
			$table->foreign('projectStatus_id')->references('id')->on('projectStatuses');
			$table->foreign('year_id')->references('id')->on('years');
			$table->foreign('count_id')->references('id')->on('counts');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
