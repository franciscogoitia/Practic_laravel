<?php



Route::get('/', function () {
    return view('layout');
});
Route::resource('business', 'BusinessController');