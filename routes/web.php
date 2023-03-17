<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

// Route::get('/', function (){
//     return view('welcome');
// });

Route::controller(ClientController::class)->group(function (){
    Route::get('getClient' , 'ClientsView')->name('clientView');
    Route::post('create' , 'addClient');
    Route::post('update' , 'update');
    Route::post('delete' , 'delete');
});