<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32)->nullable();
            $table->string('image', 100)->nullable();
            $table->string('age',32)->nullable();
            $table->string('nric',32)->nullable();
            $table->string('phone',32)->nullable();
            $table->string('address', 50)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('password', 64)->nullable();
            $table->string('school',32)->nullable();
            $table->string('token',128)->nullable();
            $table->string('current_position',64)->nullable();
            $table->string('highest_education', 64)->nullable();
            $table->string('work_experience',32)->nullable();
            $table->string('applying_position',32)->nullable();
            $table->string('`previous_job_duration,32')->nullable();
            $table->string('previous_job_role')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
