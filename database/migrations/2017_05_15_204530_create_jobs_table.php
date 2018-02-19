<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('payment');
            $table->text('description');
            $table->integer('salary');
            $table->string('requiredexperience');
            $table->integer('jobtype_id');
            $table->timestamps();

            $table->foreign('jobtype_id')
                ->references('id')->on('jobtypes');
            $table->foreign('employer_id')
                ->references('id')->on('employers');
        });
    }
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
