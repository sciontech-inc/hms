<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('billing_id');
            $table->string('insurance_id');
            $table->string('insurance_provider');
            $table->string('policy_number');
            $table->string('policy_type');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('coverage_details');
            $table->string('eligibility_verification_date');
            $table->string('eligibility_status');
            $table->string('verification_note');
            $table->string('claim_number');
            $table->string('service_code');
            $table->string('diagnosis_code');
            $table->string('claim_submission_date');
            $table->string('claim_status');
            $table->string('reimbursement_amount');
            $table->string('denial_reason');
            $table->string('resubmission_note');
            $table->string('payment_information');
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
        Schema::dropIfExists('insurances');
    }
}
