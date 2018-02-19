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
            $table->integer('id');
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->integer('jobtype_id');
            $table->string('experience');
            $table->text('about');
            $table->string('school');
            $table->string('phone');
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
        Schema::dropIfExists('employees');
    }
}
