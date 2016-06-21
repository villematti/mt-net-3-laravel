<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('worker_id')->unsigned();
			$table->integer('project_id')->unsigned();
			$table->integer('taskType_id')->unsigned();
			$table->longText('description')->nullable();
			$table->boolean('bigVisit')->default(false);
			$table->timestamp('endTime')->nullable();
            $table->timestamps();
        });
		
		Schema::table('jobs', function ($table) {
			$table->foreign('worker_id')->references('id')->on('workers');
			$table->foreign('project_id')->references('id')->on('projects');
			$table->foreign('taskType_id')->references('id')->on('taskTypes');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
