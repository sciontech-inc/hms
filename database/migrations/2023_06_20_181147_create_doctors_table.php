<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doctor_id');
            $table->string('status');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('suffix')->nullable();
            $table->string('sex');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('contact_no');
            $table->string('email');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('zip_code');
            $table->string('country');
            $table->string('address_line_1_2')->nullable();
            $table->string('address_line_2_2')->nullable();
            $table->string('city_2')->nullable();
            $table->string('province_2')->nullable();
            $table->string('zip_code_2')->nullable();
            $table->string('country_2')->nullable();
            $table->string('profile_img');
            $table->string('language_spoken');
            $table->string('emergency_fullname');
            $table->string('emergency_contact_no');
            $table->string('emergency_relationship');
            $table->string('medical_license_no');
            $table->string('medical_license_expiry_date');
            $table->string('medical_school');
            $table->string('graduation_year');
            $table->string('residency_training');
            $table->string('fellowship_training');
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
        Schema::dropIfExists('doctors');
    }
}
