<?php

use App\Http\Controllers\EventController;
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
    return view('welcome');
});

Route::get('/event', [EventController::class , 'event_page'])->name('event_page');
Route::post('/event' , [EventController::class , 'PostEvent'])->name('PostEvent');


Route::get('/listEvent' , [EventController::class , 'listEvent'])->name('listEvent');


Route::get('edit-event/{id}', [EventController::class , 'edit_event'])->name('edit_event');
Route::put('update-event/{id}', [EventController::class , 'update_event'])->name('update_event');

Route::delete('delete-event/{id}', [EventController::class , 'delete_event'])->name('delete_event');
