<?php

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

Route::get('/', function () {
    return view('welcome');
});



////registration//////


Route::get('/registration','RegController@index')->name('reg.index');

Route::post('/registration','RegController@insertDoctor');


/////login and logout
Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');
Route::get('/logout','LogoutController@index')->name('logout');


///doctor////////
///profile//////

     Route::get('/doctor/index','DoctorController@index')->name('doctor.index');

	   Route::get('/profile/view', 'DoctorController@view')->name('view.profile');

	    Route::get('/profile/edit', 'DoctorController@editProfile')->name('edit.profile');
	     Route::post('/profile/edit', 'DoctorController@updateProfile');



	     ////////prescribe///////////
	     	 Route::get('/prescribe/prescribeList', ['as'=>'prescribe.index','uses'=>'PrescribeController@index']);	
             Route::get('/prescribe/details/{id}', 'PrescribeController@show')->name('prescribe.details');

			

			Route::get('/prescribe/add', 'PrescribeController@create')->name('prescribe.add');
			Route::post('/prescribe/add', 'PrescribeController@store');



            Route::get('/prescribe/edit/{id}', 'PrescribeController@edit')->name('prescribe.edit');
			Route::post('/prescribe/edit/{id}', 'PrescribeController@update')->name('prescribe.update');

			Route::get('/prescribe/delete/{id}', 'PrescribeController@delete')->name('prescribe.delete');
			Route::post('/prescribe/delete/{id}', 'PrescribeController@destroy')->name('prescribe.destroy');


			/////schedule///////////

			 Route::get('/schedule/scheduleList', ['as'=>'schedule.index','uses'=>'ScheduleController@index']);	
             Route::get('/schedule/details/{id}', 'ScheduleController@show')->name('schedule.details');

			

			Route::get('/schedule/add', 'ScheduleController@create')->name('schedule.add');
			Route::post('/schedule/add', 'ScheduleController@store');



            Route::get('/schedule/edit/{id}', 'ScheduleController@edit')->name('schedule.edit');
			Route::post('/schedule/edit/{id}', 'ScheduleController@update')->name('schedule.update');

			//Route::get('/schedule/delete/{id}', 'ScheduleController@delete')->name('schedule.delete');
			Route::get('/schedule/delete/{id}', 'ScheduleController@destroy')->name('schedule.destroy');



/////////pdf generate///////////////

			Route::get('/pdf/generate/{id}','PDFController@PDFgenerate')->name('pdf.generate');
			    Route::get('/prescribe/details/{id}', 'PrescribeController@show')->name('prescribe.details');


			    ////////////patient list/////////

			     Route::get('/patient/patientList', ['as'=>'patient.index','uses'=>'PatientController@index']);	

			     Route::get('/appointment/appointmentList', ['as'=>'appointment.index','uses'=>'PatientController@appoint']);	
            	Route::get('/appointment/delete/{id}', 'PatientController@destroy')->name('appoint.destroy');


            	/////////////message///////////


	        Route::get('/message/send', 'MessageController@create')->name('message.send');
			Route::post('/message/send', 'MessageController@store');

			 Route::get('/message/inbox', ['as'=>'message.inbox','uses'=>'MessageController@index']);
			 Route::get('/message/delete/{id}', 'MessageController@destroy')->name('msg.destroy');	