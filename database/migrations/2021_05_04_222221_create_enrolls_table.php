<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('insurance_id');
            $table->unsignedBigInteger('parent_id');

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('schedule_id')->references('id')->on('schedules');
            $table->foreign('insurance_id')->references('id')->on('insurances');
            $table->foreign('parent_id')->references('id')->on('parents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolls');
    }
}
