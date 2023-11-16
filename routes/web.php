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

Route::get('/home', function () {
    //1. esteso con $data
    // $name = 'Melozzo';
    // $lastname = 'daCanicattì';
    // $data = [
    //     'name' => $name,
    //     'lastname' => $lastname
    // ];

    // return view('home', $data);

    //2. compatto
    $name = 'Melozzo';
    $lastname = 'daCanicattì';

    return view('home', compact('name', 'lastname'));
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/gallery', function (){

    $image = 'https://picsum.photos/200/300?random=1';
    return view('gallery', compact('image'));
});
