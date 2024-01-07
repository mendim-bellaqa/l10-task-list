<?php
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
  return view('index', [
      'tasks' => Task::latest()->paginate(10)
  ]);
})->name('tasks.index');


Route::view('/tasks/create', 'create')
  ->name('tasks.create');

Route::get('/tasks/{task}/edit', function (Task $task) {
  return view('edit', [
      'task' => $task
  ]);
})->name('tasks.edit');


Route::get('/tasks/{task}', function (Task $task) {
  return view('show', [
      'task' => $task 
  ]);
})->name('tasks.show');

Route::post('/tasks', function (TaskRequest $request) {
  $task = Task::create($request->validated());

  return redirect()->route('tasks.show', ['task' => $task])
    ->with('success', 'Task created successfully!');

})->name('tasks.store');



Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
  $task->update($request->validated());

  return redirect()->route('tasks.show', ['task' => $task])
      ->with('success', 'Task updated successfully!');
})->name('tasks.update');


Route::delete('/tasks/{task}', function (Task $task) {
  $task->delete();
  return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
})->name('tasks.destroy');
