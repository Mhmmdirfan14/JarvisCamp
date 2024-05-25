<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Mendapatkan dan menampilkan data tugas
    public function index(){
        // mendapatkan data tugas dari model
        $tasks = Task::getAll();

        // Mengirim data tugas ke view
        return view('task.index', [
            'tasks' => $tasks
        ]);
    }
}
 