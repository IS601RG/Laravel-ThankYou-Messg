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
    return view('pages.index');
});


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', function () {

    /*
    $data = request()->all();

    echo "Name: " . $data['name'] . '<br><br><br>' ;
    echo "Email: " . $data['email'] . '<br><br><br>';
    echo "Message: " . $data['message'];
    */

});