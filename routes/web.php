<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $name = 'Melozzo';
    // $lastname = 'daCanicattì';
    // $data = [
    //     'name' => $name,
    //     'lastname' => $lastname
    // ];

    // return view('home', $data);

    //2
    $name = 'Melozzo';
    $lastname = 'daCanicattì';

    return view('home', compact('name', 'lastname'));
});
