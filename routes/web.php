<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/note', [NoteController::class, 'index']);
Route::get('/note/create', [NoteController::class, 'create']);
Route::get('/note/show/{note}', [NoteController::class, 'show']);
Route::get('/note/{note}/edit', [NoteController::class, 'edit']);
Route::post('/note', [NoteController::class, 'store']);
Route::put('/note/{note}', [NoteController::class, 'update']);
Route::delete('/note/{note}', [NoteController::class, 'destroy']);


//'/notes', [NoteController::class, 'store']   store ir metode!  /note ir ceļš,   controller no kurienies ņema.
