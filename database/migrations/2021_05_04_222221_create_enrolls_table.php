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

            $table->unsignedBigInteger('student_id')->nullable(false);
            $table->unsignedBigInteger('schedule_id')->nullable(true);
            $table->unsignedBigInteger('insurance_id')->nullable(true);
            $table->unsignedBigInteger('tutor_id')->nullable(true);

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('tutor_id')->references('id')->on('tutors')->onDelete('set null')->onUpdate('cascade');
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
