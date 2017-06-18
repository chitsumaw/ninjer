<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name',64)->nullable();
            $table->string('company_address',64)->nullable();
            $table->string('email',128)->nullable();
            $table->string('emp_position',64)->nullable();
            $table->string('contact_number',32)->nullable();
            $table->string('img',128)->nullable();
            $table->string('token',128)->nullable();
            $table->string('password',64)->nullable();            
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
        Schema::dropIfExists('employers');
    }
}
