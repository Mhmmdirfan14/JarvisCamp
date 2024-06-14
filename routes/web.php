<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use App\Models\Category;
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
    return view('dashboard.index');
});

// Route Tugas
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
// Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

Route::get('/tasks/list', [TaskController::class, 'list'])->name('tasks.list');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

Route::post('/tasks/store', [TaskController::class,'store'])->name('tasks.store');

Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/update/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/delete/{id}', [TaskController::class, 'delete'])->name('tasks.delete');


// route project
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/projects/list', [ProjectsController::class, 'list'])->name('projects.list');
Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
Route::post('/projects/store', [ProjectsController::class,'store'])->name('projects.store');
Route::get('/projects/edit/{id}', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::put('/projects/update/{id}', [ProjectsController::class, 'update'])->name('projects.update');
Route::delete('/projects/delete/{id}', [ProjectsController::class, 'delete'])->name('projects.delete');

// Route category
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/list', [categoriesController::class, 'list'])->name('categories.list');
Route::get('/categories/create', [categoriesController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [categoriesController::class,'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [categoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{id}', [categoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/delete/{id}', [categoriesController::class, 'delete'])->name('categories.delete');

// Route status
Route::get('/status', [StatusController::class, 'index'])->name('status.index');
Route::get('/status/create', [statusController::class, 'create'])->name('status.create');
Route::post('/status/store', [statusController::class,'store'])->name('status.store');
Route::get('/status/edit/{id}', [statusController::class, 'edit'])->name('status.edit');
Route::put('/status/update/{id}', [statusController::class, 'update'])->name('status.update');
Route::delete('/status/delete/{id}', [statusController::class, 'delete'])->name('status.delete');

