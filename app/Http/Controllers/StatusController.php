<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;


class StatusController extends Controller
{
        // membuat fungsi index
        public function index()
        {
            // mengambil semua data 
            $statuses = Status::all();     
    
            // menampilkan data $tasks
            return view('status.index', [
                'statuses' => $statuses
            ]);
        }

        public function create() {
            return view('status.create');
         }

         public function store(Request $request) {
            $data = $request->validate([
                'name' => "required|max: 255",
            ]);
    
            Status::create($data);
    
            return redirect()->route('status.index');
         }

         public function edit(string $id) {
            $status = Status::find($id);
            return view('status.edit', compact('status'));
         }
    
         public function update(Request $request, string $id) {
           $request->validate([
                'name' => "required|max: 255",
            ]);
    
            $status = Status::find($id);
    
            $status->update([
                'name' => $request->name,
            ]);
    
            return redirect()->route('status.index');
         }
    
         public function delete(string $id) { 
            Status::find($id)->delete();
    
            return redirect()->route('status.index');
         }
}
