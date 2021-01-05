<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Tiger\Contact\Http\Controllers'], function(){

Route::get('contact', "ContactController@index");

Route::post('contact', "ContactController@send")->name("contact");

});
