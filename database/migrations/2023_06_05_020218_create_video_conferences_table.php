<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_conferences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id')->nullable();
            $table->string('doctor_id')->nullable();
            $table->string('topic');
            $table->string('agenda');
            $table->string('duration')->nullable();
            $table->string('participant_email');
            $table->string('date');
            $table->string('time');
            $table->string('meeting_link');
            $table->integer('workstation_id')->default(1);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('video_conferences');
    }
}
