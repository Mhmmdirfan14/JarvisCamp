<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectsController extends Controller
{
     // membuat fungsi index
     public function index()
     {
         // mengambil semua data $tasks
         $projects = Project::all();     //  dd($tasks);
 
         // menampilkan data $tasks
         return view('projects.index', [
             'projects' => $projects
         ]);
     }

     public function list() {
        $projects = Project::all();
        return view('projects.list', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => "required|max: 255",
            'description' => 'required',
            'status' => 'required|in:Belum Dikerjakan, Sedang Dikerjakan, Selesai',
            'categories' => 'required|in:Latihan, Tugas, Ujian',
            'start_date' => "required|date",
            'end_date' => "required|date",
        ]);

        Project::create($data);

        return redirect()->route('projects.list');
     }

     public function edit(string $id) {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
     }

     public function update(Request $request, string $id) {
        $request->validate([
            'name' => "required|max: 255",
            'description' => 'required',
            'status' => 'required|in:Belum Dikerjakan, Sedang Dikerjakan, Selesai',
            'categories' => 'required|in:Latihan, Tugas, Ujian',
            'start_date' => "required|date",
            'end_date' => "required|date",
         ]);
 
         $task = Project::find($id);
 
         $task->update([
             'name' => $request->name,
             'description' => $request->description,
             'status' => $request->status,
             'categories' => $request->categories,
             'start_date' => $request->start_date,
             'end_date' => $request->end_date,
             
         ]);
 
         return redirect()->route('projects.list');
      }
 
      public function delete(string $id) { 
         Project::find($id)->delete();
 
         return redirect()->route('projects.list');
      }
}
