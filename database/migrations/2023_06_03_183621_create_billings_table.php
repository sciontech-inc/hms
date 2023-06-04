<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('admission_id');
            $table->string('invoice_number');
            $table->string('billing_status');
            $table->string('insurance_claim_no');
            $table->decimal('total', 13, 4);
            $table->decimal('paid', 13, 4);
            $table->decimal('balance', 13, 4);
            $table->timestamps();

            $table->foreign('admission_id')
                ->references('id')
                ->on('admissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billings');
    }
}
