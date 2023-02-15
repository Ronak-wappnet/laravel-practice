<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;

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
    return view('welcome');
});
// Route::get('/test',function(){
//     echo "hello Ronak";
// });

// Route::get('/hello/{name}', function ($name){
//     $data = compact('name');
//    return view('hello')->with($data);
// });

// Route::get('/Registration',function(){
//         return view('form');
//     });

Route::get('/register',[Registration::class,'index']);// initial redirecting to registration page
Route::post('/show',[Registration::class,'pass']);//calling pass function of Registration controller


