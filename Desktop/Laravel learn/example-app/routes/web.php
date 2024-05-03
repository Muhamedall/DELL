<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudianCantroller

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

//method 1
/*Route::get('/', function () {
    return view('welcome');
});*/
  
//method 2



/*
post 
put 
patch 
delet
match(['get' ,'post'])
*/;
Route::get('homme' ,[EtudianCantroller::class, 'index'] );
Route::get('contact' ,[EtudianCantroller::class, 'affiche'])->name('soukaina');