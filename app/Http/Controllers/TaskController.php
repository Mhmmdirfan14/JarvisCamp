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
            'name' => "required|max: 255",
            'deadline' => "required|date",
            'status' => 'required|in:Belum Dikerjakan, Sedang Dikerjakan, Selesai',
            'description' => 'required',
            // 'category' => 'required'
        ]);

        Task::create($data);

        return redirect()->route('tasks.list');
     }

     public function edit(string $id) {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
     }

     public function update(Request $request, string $id) {
       $request->validate([
            'name' => "required|max: 255",
            'deadline' => "required|date",
            'status' => 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
            'description' => 'required'
        ]);

        $task = Task::find($id);

        $task->update([
            'name' => $request->name,
            'deadline' => $request->deadline,
            'status' => $request->status,
            'description' => $request->description,
            // 'category' => $request->category
        ]);

        return redirect()->route('tasks.list');
     }

     public function delete(string $id) { 
        Task::find($id)->delete();

        return redirect()->route('tasks.list');
     }
}
 