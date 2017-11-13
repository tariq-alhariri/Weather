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
    // $network = new App\Networks;

    //     $network-> lastname="Essa";
    //     $network-> fullname="muhmmed Essa Hameed";
    //     $network-> save();
//     Schema::create('network', function ( $myTable)
//     {
//     $myTable -> increments('id');
//     $myTable -> string('name');
//     $myTable -> string('lastname',30);
//     $myTable -> string('description',500);
//     $myTable -> date('created');
//     $myTable -> string('age');
//     $myTable -> timestamps();
   
// });
return view('welcome');
});


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return "Welcome to Tariq weather cast";
});
Route::get('/about/{username}', function ($username) {
    return " Welcome $username ";
});
