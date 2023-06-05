<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->string('admission_no');
            $table->string('admission_date');
            $table->string('admission_time');
            $table->string('room_no');
            $table->string('bed_no');
            $table->string('nurse_station');
            $table->string('admission_type');
            $table->string('status');
            $table->timestamps();

            $table->foreign('patient_id')
                ->references('id')
                ->on('patients');
        });

           
        // DB::table('admissions')->insert([
        //     [
        //         'admission_no' => 'AD-000001', 
        //         'admission_date' => '2023-01-01',
        //         'admission_time' => '16:00',
        //         'room_no' => '0001', 
        //         'bed_no' => '0001-01', 
        //         'nurse_station' => 'NS-01-01',
        //         'admission_type' => 'INPATIENT', 
        //         'status' => 'PENDING', 
                
        //     ],
        //     [
        //         'admission_no' => 'AD-000002', 
        //         'admission_date' => '2023-01-01',
        //         'admission_time' => '16:00',
        //         'room_no' => '0002', 
        //         'bed_no' => '0002-02', 
        //         'nurse_station' => 'NS-02-02',
        //         'admission_type' => 'INPATIENT', 
        //         'status' => 'PENDING', 

        //     ],
        //     [
        //         'admission_no' => 'AD-000003', 
        //         'admission_date' => '2023-01-01',
        //         'admission_time' => '16:00',
        //         'room_no' => '0003', 
        //         'bed_no' => '0003-03', 
        //         'nurse_station' => 'NS-03-03',
        //         'admission_type' => 'INPATIENT', 
        //         'status' => 'PENDING', 

        //     ]
        //     ,[
        //         'admission_no' => 'AD-000004', 
        //         'admission_date' => '2023-01-01',
        //         'admission_time' => '16:00',
        //         'room_no' => '0004', 
        //         'bed_no' => '0004-04', 
        //         'nurse_station' => 'NS-04-04',
        //         'admission_type' => 'INPATIENT', 
        //         'status' => 'PENDING', 

        //     ]
        //     ,[
        //         'admission_no' => 'AD-000005', 
        //         'admission_date' => '2023-01-01',
        //         'admission_time' => '16:00',
        //         'room_no' => '0005', 
        //         'bed_no' => '0005-05', 
        //         'nurse_station' => 'NS-05-05',
        //         'admission_type' => 'INPATIENT', 
        //         'status' => 'PENDING', 

        //     ],
        //     [
        //         'admission_no' => 'AD-000006', 
        //         'admission_date' => '2023-01-01',
        //         'admission_time' => '16:00',
        //         'room_no' => '0006', 
        //         'bed_no' => '0006-06', 
        //         'nurse_station' => 'NS-06-06',
        //         'admission_type' => 'INPATIENT', 
        //         'status' => 'PENDING', 

        //     ]
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
