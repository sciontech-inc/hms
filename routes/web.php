<?php

use App\Events\FormSubmitted;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth']], function() {

    // Route::get('/', function () {
    //     return view('backend.pages.dashboard');
    // });
    Route::get         ('/',                                'DashboardController@action_item'                                    )->name('dashboard');

    // Route::get('/dashboard', function () {
    //     return view('backend.pages.dashboard');
    // });

    Route::get('/inpatient', function () {
        return view('backend.pages.hms.transaction.inpatient');
    });

    Route::group(['prefix' => '/dashboard'], function (){
            Route::get         ('/',                             'DashboardController@index'                                    )->name('dashboard');
    }); 

    Route::group(['prefix' => '/masterlist'], function() {
        Route::group(['prefix' => '/employee'], function (){
            Route::get              ('/',                        'EmployeeInformationController@masterlist'                     )->name('employee_masterlist');
            Route::get              ('/get',                     'EmployeeInformationController@getmasterlist'                  )->name('get_data');
        });
    });

    Route::group(['prefix' => '/api'], function (){
        Route::group(['prefix' => '/leave-type'], function (){
            Route::post         ('/getData',                     'LeaveTypeController@getData'                                  )->name('get_data_leave_type');
        });
    });

    Route::group(['prefix' => '/payroll'], function (){

        Route::group(['prefix' => '/global'], function() {
            Route::post         ('/getdatesanddays',             'GlobalController@getDateAndDays'                              )->name('get_date_and_days');
        });

        Route::group(['prefix' => '/work_assignments'], function (){
            Route::get          ('/',                            'WorkAssignmentsController@index'                              )->name('work_assignments');
            Route::get          ('/get',                         'WorkAssignmentsController@get'                                )->name('get_work_assignments');
            Route::post         ('/save',                        'WorkAssignmentsController@store'                              )->name('save_work_assignments');
            Route::get          ('/edit/{id}',                   'WorkAssignmentsController@edit'                               )->name('edit_work_assignments');
            Route::post         ('/update/{id}',                 'WorkAssignmentsController@update'                             )->name('update_work_assignments');
            Route::post         ('/destroy',                     'WorkAssignmentsController@destroy'                            )->name('destroy_work_assignments');
        });

    });

    Route::group(['prefix' => '/hms'], function (){

        //Patient Routes

        Route::group(['prefix' => '/patients'], function (){
            Route::get          ('/',                            'PatientsController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'PatientsController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'PatientsController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'PatientsController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'PatientsController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'PatientsController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/patient-insurance'], function (){
            Route::post          ('/save',                       'PatientInsuranceController@store'                        )->name('save_patient_insurance');
            Route::get           ('/edit/{id}',                  'PatientInsuranceController@edit'                         )->name('edit_patient_insurance');
            Route::post          ('/update/{id}',                'PatientInsuranceController@update'                       )->name('update_patient_insurance');
            Route::get           ('/get/{id}',                   'PatientInsuranceController@get'                          )->name('get_patient_insurance');
            Route::post          ('/destroy',                    'PatientInsuranceController@destroy'                      )->name('destroy_patient_insurance');
        });

        Route::group(['prefix' => '/family-information'], function (){
            Route::post          ('/save',                       'FamilyInformationController@store'                        )->name('save_family_information');
            Route::get           ('/edit/{id}',                  'FamilyInformationController@edit'                         )->name('edit_family_information');
            Route::post          ('/update/{id}',                'FamilyInformationController@update'                       )->name('update_family_information');
            Route::get           ('/get/{id}',                   'FamilyInformationController@get'                          )->name('get_family_information');
            Route::post          ('/destroy',                    'FamilyInformationController@destroy'                      )->name('destroy_family_information');
        });

        Route::group(['prefix' => '/medical-cases'], function (){
            
            Route::post          ('/save',                       'MedicalCaseController@store'                              )->name('save_medical_case');
            Route::get           ('/edit/{id}',                  'MedicalCaseController@edit'                               )->name('edit_medical_case');
            Route::post          ('/update/{id}',                'MedicalCaseController@update'                             )->name('update_medical_case');
            Route::get           ('/get/{id}',                   'MedicalCaseController@get'                                )->name('get_medical_case');
            Route::post          ('/destroy',                    'MedicalCaseController@destroy'                            )->name('destroy_medical_case');
        });

        Route::group(['prefix' => '/medicine-taken'], function (){
            
            Route::post          ('/save',                       'MedicineTakenController@store'                              )->name('save_medicine_taken');
            Route::get           ('/edit/{id}',                  'MedicineTakenController@edit'                               )->name('edit_medicine_taken');
            Route::post          ('/update/{id}',                'MedicineTakenController@update'                             )->name('update_medicine_taken');
            Route::get           ('/get/{id}',                   'MedicineTakenController@get'                                )->name('get_medicine_taken');
            Route::post          ('/destroy',                    'MedicineTakenController@destroy'                            )->name('destroy_medicine_taken');
        });

        Route::group(['prefix' => '/procedures-undertaken'], function (){

            Route::post          ('/save',                       'ProceduresUndertakenController@store'                              )->name('save_procedures_undertaken');
            Route::get           ('/edit/{id}',                  'ProceduresUndertakenController@edit'                               )->name('edit_procedures_undertaken');
            Route::post          ('/update/{id}',                'ProceduresUndertakenController@update'                             )->name('update_procedures_undertaken');
            Route::get           ('/get/{id}',                   'ProceduresUndertakenController@get'                                )->name('get_procedures_undertaken');
            Route::post          ('/destroy',                    'ProceduresUndertakenController@destroy'                            )->name('destroy_procedures_undertaken');
        });

        Route::group(['prefix' => '/patient-allergies'], function (){
            
            Route::post          ('/save',                       'PatientAllergiesController@store'                              )->name('save_patient_allergies');
            Route::get           ('/edit/{id}',                  'PatientAllergiesController@edit'                               )->name('edit_patient_allergies');
            Route::post          ('/update/{id}',                'PatientAllergiesController@update'                             )->name('update_patient_allergies');
            Route::get           ('/get/{id}',                   'PatientAllergiesController@get'                                )->name('get_patient_allergies');
            Route::post          ('/destroy',                    'PatientAllergiesController@destroy'                            )->name('destroy_patient_allergies');
        });

        Route::group(['prefix' => '/progress-consultation'], function (){

            Route::post          ('/save',                       'ProgressConsultationController@store'                              )->name('save_progress_consultation');
            Route::get           ('/edit/{id}',                  'ProgressConsultationController@edit'                               )->name('edit_progress_consultation');
            Route::post          ('/update/{id}',                'ProgressConsultationController@update'                             )->name('update_progress_consultation');
            Route::get           ('/get/{id}',                   'ProgressConsultationController@get'                                )->name('get_progress_consultation');
            Route::post          ('/destroy',                    'ProgressConsultationController@destroy'                            )->name('destroy_progress_consultation');
        });

        Route::group(['prefix' => '/vital-measurement'], function (){
            
            Route::post          ('/save',                       'VitalMeasurementController@store'                              )->name('save_vital_measurement');
            Route::get           ('/edit/{id}',                  'VitalMeasurementController@edit'                               )->name('edit_vital_measurement');
            Route::post          ('/update/{id}',                'VitalMeasurementController@update'                             )->name('update_vital_measurement');
            Route::get           ('/get/{id}',                   'VitalMeasurementController@get'                                )->name('get_vital_measurement');
            Route::post          ('/destroy',                    'VitalMeasurementController@destroy'                            )->name('destroy_vital_measurement');
        });

        Route::group(['prefix' => '/family-medical-history'], function (){
            
            Route::post          ('/save',                       'FamilyMedicalHistoryController@store'                              )->name('save_family_medical_history');
            Route::get           ('/edit/{id}',                  'FamilyMedicalHistoryController@edit'                               )->name('edit_family_medical_history');
            Route::post          ('/update/{id}',                'FamilyMedicalHistoryController@update'                             )->name('update_family_medical_history');
            Route::get           ('/get/{id}',                   'FamilyMedicalHistoryController@get'                                )->name('get_family_medical_history');
            Route::post          ('/destroy',                    'FamilyMedicalHistoryController@destroy'                            )->name('destroy_family_medical_history');
        });

        Route::group(['prefix' => '/social-history'], function (){
                  
            Route::post          ('/save',                       'SocialHistoryController@store'                                        )->name('save_social_history');
            Route::get           ('/edit/{id}',                  'SocialHistoryController@edit'                                         )->name('edit_social_history');
            Route::post          ('/update/{id}',                'SocialHistoryController@update'                                       )->name('update_social_history');
            Route::get           ('/get/{id}',                   'SocialHistoryController@get'                                          )->name('get_social_history');
            Route::post          ('/destroy',                    'SocialHistoryController@destroy'                                      )->name('destroy_social_history');
        });

        Route::group(['prefix' => '/other-information'], function (){
            
            Route::post          ('/save',                       'PatientOtherInformationController@store'                              )->name('save_other_information');
            Route::get           ('/edit/{id}',                  'PatientOtherInformationController@edit'                               )->name('edit_other_information');
            Route::post          ('/update/{id}',                'PatientOtherInformationController@update'                             )->name('update_other_information');
            Route::get           ('/get/{id}',                   'PatientOtherInformationController@get'                                )->name('get_other_information');
            Route::post          ('/destroy',                    'PatientOtherInformationController@destroy'                            )->name('destroy_other_information');
        });

        //End Patient Routes


        //Doctor Routes

        Route::group(['prefix' => '/doctors'], function (){
            Route::get          ('/',                            'DoctorsController@index'                                )->name('doctor_information');
            Route::get          ('/get',                         'DoctorsController@get'                                  )->name('get_doctor_information');
            Route::post         ('/save',                        'DoctorsController@store'                                )->name('save_doctor_information');
            Route::get          ('/edit/{id}',                   'DoctorsController@edit'                                 )->name('edit_doctor_information');
            Route::post         ('/update/{id}',                 'DoctorsController@update'                               )->name('update_doctor_information');
            Route::post         ('/destroy',                     'DoctorsController@destroy'                              )->name('destroy_doctor_information');
        });

        //End Doctor Routes

        //PhilHealth Claims Routes

        Route::group(['prefix' => '/philhealth_claims'], function (){
            Route::get          ('/',                            'PhilHealthClaimsController@index'                                )->name('philhealth_claims');
            Route::get          ('/get',                         'PhilHealthClaimsController@get'                                  )->name('get_philhealth_claims');
            Route::get          ('/patient/get',                 'PhilHealthClaimsController@get'                                  )->name('get_philhealth_claims');
            Route::post         ('/save',                        'PhilHealthClaimsController@store'                                )->name('save_philhealth_claims');
            Route::get          ('/edit/{id}',                   'PhilHealthClaimsController@edit'                                 )->name('edit_philhealth_claims');
            Route::post         ('/update/{id}',                 'PhilHealthClaimsController@update'                               )->name('update_philhealth_claims');
            Route::post         ('/destroy',                     'PhilHealthClaimsController@destroy'                              )->name('destroy_philhealth_claims');
        });

        //End PhilHealth Claims

        Route::group(['prefix' => '/set_appointment'], function (){
            Route::get          ('/',                            'AppointmentController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'AppointmentController@get'                                  )->name('get_employment_information');
            Route::get          ('/patient/get',                  'AppointmentController@patientGet'                           )->name('get_patient_information');
            Route::post         ('/save',                        'AppointmentController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'AppointmentController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'AppointmentController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'AppointmentController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/billing'], function (){
            Route::get          ('/',                            'BillingController@index'                                )->name('billing');
            Route::get          ('/get',                         'BillingController@get'                                  )->name('get_billing');
            Route::get          ('/admission/get',               'BillingController@admissionGet'                         )->name('get_billing');
            Route::get          ('/payment/get',                 'BillingController@payment'                              )->name('get_billing');
            Route::get          ('/billing_detail/get/{id}',     'BillingController@billingDetail'                        )->name('get_billing');
            Route::post         ('/save',                        'BillingController@store'                                )->name('save_get_billing');
            Route::get          ('/edit/{id}',                   'BillingController@edit'                                 )->name('edit_get_billing');
            Route::post         ('/update/{id}',                 'BillingController@update'                               )->name('update_get_billing');
            Route::post         ('/destroy',                     'BillingController@destroy'                              )->name('destroy_get_billing');
        });

        Route::group(['prefix' => '/insurance'], function (){
            Route::get          ('/',                            'InsuranceController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'InsuranceController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'InsuranceController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'InsuranceController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'InsuranceController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'InsuranceController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/medical_file'], function (){
            Route::get          ('/',                            'MedicalFileController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'MedicalFileController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'MedicalFileController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'MedicalFileController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'MedicalFileController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'MedicalFileController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/pharmacy'], function (){
            Route::get          ('/',                            'PharmacyController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'PharmacyController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'PharmacyController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'PharmacyController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'PharmacyController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'PharmacyController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/inventory'], function (){
            Route::get          ('/',                            'InventoryController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'InventoryController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'InventoryController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'InventoryController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'InventoryController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'InventoryController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/radiology_procedure'], function (){
            Route::get          ('/',                            'RadiologyProcedureController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'RadiologyProcedureController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'RadiologyProcedureController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'RadiologyProcedureController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'RadiologyProcedureController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'RadiologyProcedureController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/radiology_result'], function (){
            Route::get          ('/',                            'RadiologyResultController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'RadiologyResultController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'RadiologyResultController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'RadiologyResultController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'RadiologyResultController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'RadiologyResultController@destroy'                              )->name('destroy_employment_information');
        });

    });

    Route::group(['prefix' => '/online'], function (){

        Route::group(['prefix' => '/online_payment'], function (){
            Route::get          ('/',                            'OnlinePaymentController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'OnlinePaymentController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'OnlinePaymentController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'OnlinePaymentController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'OnlinePaymentController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'OnlinePaymentController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/online_appointment'], function (){
            Route::get          ('/',                            'OnlineAppointmentController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'OnlineAppointmentController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'OnlineAppointmentController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'OnlineAppointmentController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'OnlineAppointmentController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'OnlineAppointmentController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/online_queue'], function (){
            Route::get          ('/',                            'OnlineQueueController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'OnlineQueueController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'OnlineQueueController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'OnlineQueueController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'OnlineQueueController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'OnlineQueueController@destroy'                              )->name('destroy_employment_information');
        });
     
        Route::group(['prefix' => '/medical_files'], function (){
            Route::get          ('/',                            'MedicalFileController@index2'                                )->name('employment_information');
            Route::get          ('/get',                         'MedicalFileController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'MedicalFileController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'MedicalFileController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'MedicalFileController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'MedicalFileController@destroy'                              )->name('destroy_employment_information');
        });
    });

    Route::group(['prefix' => '/ehr'], function (){

        Route::group(['prefix' => '/health_information'], function (){
            Route::get          ('/',                            'HealthInformationController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'HealthInformationController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'HealthInformationController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'HealthInformationController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'HealthInformationController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'HealthInformationController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/video_conference'], function (){
            Route::get          ('/',                            'VideoConferenceController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'VideoConferenceController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'VideoConferenceController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'VideoConferenceController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'VideoConferenceController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'VideoConferenceController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/specialized_notes'], function (){
            Route::get          ('/',                            'SpecializedNoteController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'SpecializedNoteController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'SpecializedNoteController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'SpecializedNoteController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'SpecializedNoteController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'SpecializedNoteController@destroy'                              )->name('destroy_employment_information');
        });

        Route::group(['prefix' => '/vital_signs'], function (){
            Route::get          ('/',                            'VitalSignsController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'VitalSignsController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'VitalSignsController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'VitalSignsController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'VitalSignsController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'VitalSignsController@destroy'                              )->name('destroy_employment_information');
        });

    });

});


Route::get('/sender', function() {
    return view('backend.sender');
});

Route::post('/sender', function() {
    $text = request()->text;
    event(new FormSubmitted($text));
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
