<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@home')->name('welcome');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::post('/contacts', function () {

    $data = request(['name','email','subject', 'message']);

    \Illuminate\Support\Facades\Mail::to('giacomodm.work@gmail.com')
    ->send(new \App\Mail\ContactMe($data));

    return redirect('/contacts')
    ->with('flash', 'Message Sent Succesfully');
});
