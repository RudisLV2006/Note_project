<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/notes', [NoteController::class, 'index']);
Route::get('/notes/create', [NoteController::class, 'create']);
Route::get('/notes/show', [NoteController::class, 'show']);
Route::post('/notes', [NoteController::class, 'store']);

//'/notes', [NoteController::class, 'store']   store ir metode!  /notes ir ceļš,   controller no kurienies ņemt.
