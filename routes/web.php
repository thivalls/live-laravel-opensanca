<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route('dashboard')
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('tasks', [App\Http\Controllers\TaskController::class, 'index']);
// Route::get('tasks/{task}', [App\Http\Controllers\TaskController::class, 'show']);
// Route::put('tasks/{task}/edit', [App\Http\Controllers\TaskController::class, 'edit']);

Route::resource('tasks', App\Http\Controllers\TaskController::class);

// Route::get('teste/{name?}', function($name = 'Thiago'){
//     return "Olá {$name}";
// });

// Route::get('minhaview', function(){
//     return view('test.primeirapasta.segundapasta.index');
// });

require __DIR__.'/auth.php';
