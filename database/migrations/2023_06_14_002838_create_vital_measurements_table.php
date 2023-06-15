<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_measurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id');
            $table->string('vital_date');
            $table->string('vital_time');
            $table->string('blood_pressure');
            $table->string('heart_rate');
            $table->string('temperature');
            $table->string('respiratory_rate');
            $table->string('oxygen_saturation');
            $table->string('pulse_rate');
            $table->string('vital_remarks');
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
        Schema::dropIfExists('vital_measurements');
    }
}
