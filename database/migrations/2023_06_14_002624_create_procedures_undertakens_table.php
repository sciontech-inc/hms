<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProceduresUndertakensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedures_undertakens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id');
            $table->string('procedure_date');
            $table->string('procedure_name');
            $table->string('procedure_description');
            $table->string('reason');
            $table->string('results');
            $table->string('pre_procedure_preparation');
            $table->string('post_procedure_preparation');
            $table->string('complications');
            $table->string('sedation_used');
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
        Schema::dropIfExists('procedures_undertakens');
    }
}
