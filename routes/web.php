<?php

Route::get('/' , 'LVCCController@showindex');
Route::get('/index.blade', 'LVCCController@index');
Route::get('/About.blade' , 'LVCCController@showabout');
Route::get('/Achievements.blade' , 'LVCCController@showAchievement');
Route::get('/rules.blade' , 'LVCCController@showRules');
Route::post('/next' , 'LVCCController@showNext');
Route::post('/back' , 'LVCCController@showBack');
Route::post('/next1' , 'LVCCController@showOther');
Route::post('/back' , 'LVCCController@showBack');
Route::get('/form.blade' , 'LVCCController@showForms');
Route::post('/process-registration' , 'LVCCController@Request_form');
Route::post('/add-students' , 'LVCCController@showForms');
Route::post('/show-students', 'LVCCCOntroller@showList');
Route::post('/update' , 'LVCCController@Update');
Route::post('/edit/{id}' , 'LVCCController@editform');
Route::post('/delete/{id}' , 'LVCCController@editform');
Route::auth();
Auth::routes();
Route::get('/home', 'HomeController@index');
