<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks;

    public function __construct() {

        $this->tasks = collect([
            ['id' => 2, 'name' => 'Learn laravel', 'duration' => 12],
            ['id' => 3, 'name' => 'Learn Ruby', 'duration' => 24]
        ])->keyBy('id');
    }

    public function index()
    {
        return view('task.index')->with('tasks', $this->tasks);
    }

    public function show( $task)
    {
        return view('task.show')->with('task', $this->tasks[$task]);
    }
}
