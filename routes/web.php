<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\SinhvienController;

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
// // require_once 'form.php';
// route::get('/code',function(){
// $html= '<h1>test adsd</h1>';
// return view('form');
//     // echo" $html3";
// });

// Route::get('input', function () {
//     // echo "<h1>dasdas</h1>";
//     return view('student');
    
// });

// route::post('tien12',function(){
//         return "awdadas"."</br>".   "phuong thuc cua post path";
// });

// route::put('tien',function(){
//     return "pt put cua path";
// });
// route::get('/',function(){
//     return view('welcome');
// });

// route::post('time',function(){
//     return "ĐĂNG KÍ THÀNH CÔNG";
    
// });

Route::resource('/sinhvien', SinhvienController::class);

// Route::match(['get', 'post'], 'tien2', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });
