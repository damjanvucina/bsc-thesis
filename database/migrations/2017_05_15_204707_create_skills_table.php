<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('employee_skill', function (Blueprint $table) {
            $table->integer('employee_id');
            $table->integer('skill_id');
            $table->timestamps();

            $table->primary(array('employee_id', 'skill_id'));
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('skill_id')->references('id')->on('skills');
        });

        Schema::create('job_skill', function (Blueprint $table) {
            $table->integer('job_id');
            $table->integer('skill_id');
            $table->timestamps();

            $table->primary(array('job_id', 'skill_id'));
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('skill_id')->references('id')->on('skills');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
        Schema::dropIfExists('employee_skill');
        Schema::dropIfExists('job_skill');
    }
}
