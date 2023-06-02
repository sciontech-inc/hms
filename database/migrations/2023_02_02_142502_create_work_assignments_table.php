<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('status');
            $table->integer('workstation_id')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();
            
            $table->foreign('created_by')
                ->references('id')
                ->on('users');
            
            $table->foreign('updated_by')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_assignments');
    }
}
