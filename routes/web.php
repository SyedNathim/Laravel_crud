<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/todos', [TodoController::class, 'index'])->name('todos.home');

// Route::get('/todos/create', [TodoController::class, 'create']);
// Route::post('/todos/store', [TodoController::class, 'store']);
// Route::post('/todos', 'TodoController@store')->name('todos.store');

Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos/store', [TodoController::class, 'store'])->name('todos.store');
Route::get('/todos/show', [TodoController::class, 'show'])->name('todos.show');
Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todos.edit');
Route::delete('/todos/{id}/', [TodoController::class, 'destroy'])->name('todos.destroy');
Route::put('/todos/{id}/update', [TodoController::class, 'update'])->name('todos.update');
Route::get('/todos/{id}/', [TodoController::class, 'show'])->name('todos.show');
// Route::get('products-create', [ProductController::class, 'create']);

// Route::delete('/todos/{id}', 'TodoController@destroy');

// // Define routes for reading Todos
// Route::get('/todos', 'TodoController@index'); // Index page to display all Todos
// Route::get('/todos/{id}', 'TodoController@show'); // Show a specific Todo

// // Define routes for creating Todos
// Route::get('/todos/create', 'TodoController@create'); // Show the create form
// Route::post('/todos', 'TodoController@store'); // Store the newly created Todo

// // Define routes for updating Todos
// Route::get('/todos/{id}/edit', 'TodoController@edit'); // Show the edit form
// Route::put('/todos/{id}', 'TodoController@update'); // Update the specified Todo

// // Define routes for deleting Todos
// Route::delete('/todos/{id}', 'TodoController@destroy'); // Delete the specified Todo
