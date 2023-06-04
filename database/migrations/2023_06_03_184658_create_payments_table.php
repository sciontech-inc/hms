<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('billing_id');
            $table->decimal('amount', 13, 4);
            $table->string('payment_method');
            $table->date('payment_date');
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('billing_id')
                ->references('id')
                ->on('billings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
