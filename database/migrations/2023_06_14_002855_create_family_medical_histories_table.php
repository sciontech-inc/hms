<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMedicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_medical_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id');
            $table->string('relationship');
            $table->string('medical_condition');
            $table->string('age_at_diagnosis');
            $table->string('age_at_death');
            $table->string('cause_of_death');
            $table->string('other_relevant_medical_history');
            $table->string('family_history_of_specific_conditions');
            $table->string('ethnicity');
            $table->string('lifestyle_factors');
            $table->string('other_family_members_affected');
            $table->string('remarks');
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
        Schema::dropIfExists('family_medical_histories');
    }
}
