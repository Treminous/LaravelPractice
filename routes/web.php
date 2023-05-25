<?php

use App\Http\Controllers\pagesController;
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


// function () {
//      return view('welcome');
//     // return "Hello World";
// });
Route::get('/', [pagesController::class,'index']);
Route::get('/about', [pagesController::class,'about']);
Route::get('/service',[pagesController::class,'about']);
//Insert dynamic values
Route::get('/users/{id}/{name}',function($id,$name)
{
    return "This is your   ".$name. " with an id  ". $id;
});