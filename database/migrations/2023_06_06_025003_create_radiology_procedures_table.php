<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadiologyProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radiology_procedures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id')->nullable();
            $table->string('patient_name');
            $table->string('procedure_type');
            $table->string('ordering_physician');
            $table->string('date');
            $table->string('time');
            $table->string('notes');
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
        Schema::dropIfExists('radiology_procedures');
    }
}
