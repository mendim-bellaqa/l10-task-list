<?php

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
class Task
{
    public $id;
    public $title;
    public $description;
    public $long_description;
    public $completed;
    public $created_at;
    public $updated_at;

    public function __construct(
        $id,
        $title,
        $description,
        $long_description,
        $completed,
        $created_at,
        $updated_at
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->long_description = $long_description;
        $this->completed = $completed;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

Route::get('/', function () use ($tasks) {
    return view('index', [
        'tasks' => $tasks
    ]);
})->name('tasks.index');



Route::get('/{id}', function ($id) {
    return 'One task show';

})->name('tasks.show');