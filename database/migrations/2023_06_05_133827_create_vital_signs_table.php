<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('attendant_id');
            $table->string('patient_name');
            $table->string('sex');
            $table->string('patient_type');
            $table->string('date');
            $table->string('time');
            $table->string('blood_pressure');
            $table->string('temperature');
            $table->string('respiratory_rate');
            $table->string('pulse_rate');
            $table->string('oxygen_saturation');
            $table->string('weight');
            $table->string('height');
            $table->string('bmi')->nullable();
            $table->longText('notes')->nullable();
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
        Schema::dropIfExists('vital_signs');
    }
}
