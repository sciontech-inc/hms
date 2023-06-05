<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference_id')->nullable();
            $table->string('doctor_id')->nullable();
            $table->string('department_id')->nullable();
            $table->string('patient_name');
            $table->string('referred_by')->nullable();
            $table->string('referred_to');
            $table->string('status')->default(0);
            $table->string('referred_date');
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
        Schema::dropIfExists('health_information');
    }
}
