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
    
    Route::get('/', function () {
        return view('backend.pages.dashboard');
    });
    
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    });
    
    Route::get('/inpatient', function () {
        return view('backend.pages.hms.transaction.inpatient');
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

        Route::group(['prefix' => '/patients'], function (){
            Route::get          ('/',                            'PatientsController@index'                                )->name('employment_information');
            Route::get          ('/get',                         'PatientsController@get'                                  )->name('get_employment_information');
            Route::post         ('/save',                        'PatientsController@store'                                )->name('save_employment_information');
            Route::get          ('/edit/{id}',                   'PatientsController@edit'                                 )->name('edit_employment_information');
            Route::post         ('/update/{id}',                 'PatientsController@update'                               )->name('update_employment_information');
            Route::post         ('/destroy',                     'PatientsController@destroy'                              )->name('destroy_employment_information');
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
