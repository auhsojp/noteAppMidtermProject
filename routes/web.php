<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Home', [NotesController::class, 'index' ])->name('notes.index');
Route::get('/create', [NotesController::class, 'create' ])->name('notes.create');
Route::post('/Home', [NotesController::class, 'save' ])->name('notes.save');
Route::get('/Home{note}/edit', [NotesController::class, 'edit' ])->name('notes.edit');
Route::put('/Home{note}/update', [NotesController::class, 'update' ])->name('notes.update');
Route::delete('/Home{note}/delete', [NotesController::class, 'delete' ])->name('notes.delete');
Route::get('/Home/{note}', [NotesController::class, 'show'])->name('notes.view');
Route::get('/log', [NotesController::class, 'log'])->name('notes.log');

