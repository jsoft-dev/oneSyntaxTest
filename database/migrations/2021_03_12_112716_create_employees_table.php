<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('lastname',60);
            $table->string('firstname',60);
            $table->string('middlename',60)->nullable();
            $table->string('address',120);
            $table->foreignId('department_id')->references('id')->on('departments');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('state_id')->references('id')->on('states');
            $table->foreignId('country_id')->references('id')->on('countries');
            $table->char('zip',10);
            $table->date('birthdate');
            $table->date('date_hired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.ß
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
