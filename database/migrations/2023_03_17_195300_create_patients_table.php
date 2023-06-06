<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_id');
            $table->string('status');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('suffix')->nullable();
            $table->string('birthdate');
            $table->string('gender');
            $table->string('citizenship');
            $table->string('email_address');
            $table->string('birthplace');
            $table->string('marital_status');
            $table->string('body_marks');
            $table->string('nationality');
            $table->string('religion');
            $table->string('blood_type');
            $table->string('occupation');
            $table->string('referred_by');
            $table->string('referred_by_2');
            $table->string('referred_by_3');
            $table->string('referred_by_4');
            $table->string('contact_no_1');
            $table->string('contact_no_2');
            $table->string('street_no');
            $table->string('barangay');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('zip_code');
            $table->string('street_no_2');
            $table->string('barangay_2');
            $table->string('city_2');
            $table->string('province_2');
            $table->string('country_2');
            $table->string('zip_code_2');
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
        Schema::dropIfExists('patients');
    }
}
