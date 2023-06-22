<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhilHealthClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phil_health_claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id');
            $table->string('total_amount_actual');
            $table->string('total_amount_claimed');
            $table->string('admission_date');
            $table->string('discharge_date');
            $table->string('member_id');
            $table->string('member_lastname');
            $table->string('member_firstname');
            $table->string('member_middlename');
            $table->string('member_suffix');
            $table->string('member_birthdate');
            $table->string('member_phone_no');
            $table->string('member_mobile_no');
            $table->string('member_gender');
            $table->string('member_email');
            $table->string('member_barangay');
            $table->string('member_city');
            $table->string('member_zip_code');
            $table->string('membership_type');
            $table->string('employer_id');
            $table->string('employer_name');
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
        Schema::dropIfExists('phil_health_claims');
    }
}
