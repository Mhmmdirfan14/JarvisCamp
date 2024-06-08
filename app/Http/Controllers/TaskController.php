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
         $tasks = Task::all();
        //  dd($tasks);
 
         // menampilkan data $tasks
         return view('tasks.index', [
             'tasks' => $tasks
         ]);
     }
 
    //  // membuat fungsi show
    //  public function show($id)
    //  {
    //      // mengambil data id $tasks 
    //      $tasks = Task::find($id);
 
    //      // menampilkan data id $tasks
    //      return view('tasks.show', [
    //          'tasks' => $tasks 
    //      ]);
    //  }

     public function list() {
         $tasks = Task::all();
         return view('tasks.list', compact('tasks'));
     }

     public function create() {
        return view('tasks.create');
     }

     public function store(Request $request) {
        $data = $request->validate([
            'nama' => "required|max: 255",
            'deadliine' => "required|date",
            'status' => 'required|in:Belum Dikerjakan, Sedang Dikerjakan, Selesai',
            'description' => 'required'
        ]);
     }
}
 