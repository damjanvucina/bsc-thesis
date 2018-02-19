<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('employee_language', function (Blueprint $table) {
            $table->integer('employee_id');
            $table->integer('language_id');
            $table->timestamps();

            $table->primary(array('employee_id', 'language_id'));
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('language_id')->references('id')->on('languages');
        });

        Schema::create('job_language', function (Blueprint $table) {
            $table->integer('job_id');
            $table->integer('language_id');
            $table->timestamps();

            $table->primary(array('job_id', 'language_id'));
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('language_id')->references('id')->on('languages');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
        Schema::dropIfExists('employee_language');
        Schema::dropIfExists('job_language');
    }
}
