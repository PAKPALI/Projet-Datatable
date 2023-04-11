<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VueJsController;

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
Route::controller(VueJsController::class)->group(function (){
    Route::get('home' , 'vueJs')->name('a');
    Route::get('niveau' , 'NiveauIndex')->name('niveau');
    Route::get('etudiant/list' , 'EtudiantIndex')->name('etudiant.list');
    Route::get('etudiant/create' , 'EtudiantCreate')->name('etudiant.create');
});