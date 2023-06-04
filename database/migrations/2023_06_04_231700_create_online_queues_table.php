<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_queues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('sex');
            $table->string('birthdate');
            $table->string('contact_no');
            $table->string('email');
            $table->string('relationship');
            $table->string('placement')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('online_queues');
    }
}
