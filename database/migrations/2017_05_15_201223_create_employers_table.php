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
            $table->integer('id');
            $table->string('name');
            $table->integer('jobtype_id');
            $table->integer('numemployees');
            $table->integer('numjobs');
            $table->text('about');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('jobtype_id')
                ->references('id')->on('jobtypes');
            $table->foreign('id')
                ->references('id')->on('users');
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
