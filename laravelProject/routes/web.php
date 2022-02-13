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

Route::get('/', function () {
    return view('homePage');
});

Route::get('/about', function () {
    return view('aboutPage');
});


Route::get('/rustam' , function () {
    echo "This is the function of rustam url then return view page welcome ";
    return view('welcome');
});

Route::get('demo' , function () {
    return view('demo');
});

Route::get('/demo/{name}' , function ($name=NULL) {
    echo "Welcome ".$name;
    return view('demo');
});
  
Route::get('/home',function(){
    return view('home');

});


// Route::get('/demo/{name}/{id?} ' , function ($name,$id=NULL) {
//     $data=compact('name','id');
//     // var_dump($data);
//         return view('demo')->with($data);
// });


// come with post / get 
Route::any('/submit ' , function () {
    echo "post method hit through rought ";
});
