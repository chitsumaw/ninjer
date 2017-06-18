<?php

use Illuminate\Support\Facades\Schema;
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
            $table->integer('employer_id');
            $table->string('location',256)->nullable();
            $table->string('venue',256)->nullable();
            $table->string('job_role',32)->nullable();
            $table->text('requirements');
            $table->string('wage',64)->nullable();
            $table->integer('number')->nullable();
            $table->string('date',32)->nullable();
            $table->string('time',32)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
