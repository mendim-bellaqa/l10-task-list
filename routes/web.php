<?php
use \App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function(){
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
  $tasks = Task::all(); // Fetch tasks from the database
  return view('index', [
      'tasks' => Task::latest()->get()
  ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
  return view('show', ['task' => Task::findOrFail($id)]);
})->name('tasks.show');

Route::match(['get', 'post'], '/tasks/store', function (Request $request) {
  dd($request->all());
})->name('tasks.store');