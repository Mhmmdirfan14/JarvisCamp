<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
     // membuat fungsi index
     public function index()
     {
         // mengambil semua data $tasks
         $tasks = Task::getAll();
 
         // menampilkan data $tasks
         return view('tasks.index', [
             'tasks' => $tasks
         ]);
     }
 
     // membuat fungsi show
     public function show($id)
     {
         // mengambil data id $tasks 
         $task = Task::find($id);
 
         // menampilkan data id $tasks
         return view('tasks.show', [
             'task' => $task 
         ]);
     }
}
 