<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientAllergiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_allergies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id');
            $table->string('allergen');
            $table->string('reaction');
            $table->string('severity');
            $table->string('date_of_onset');
            $table->string('treatment');
            $table->string('duration');
            $table->string('source_of_information');
            $table->string('know_cross_reactives');
            $table->string('current_management_plan');
            $table->string('medications_to_avoid');
            $table->string('severity_of_reaction');
            $table->string('anaphylaxis');
            $table->string('allergy_testing');
            $table->string('other_relevant_medical_history');
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
        Schema::dropIfExists('patient_allergies');
    }
}
