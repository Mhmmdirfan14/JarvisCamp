<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
     // membuat fungsi index
     public function index()
     {
         // mengambil semua data 
         $categories = Categories::all();     
 
         // menampilkan data $tasks
         return view('categories.index', [
             'categories' => $categories
         ]);
     }

     public function create() {
        return view('categories.create');
     }

     public function store(Request $request) {
        $data = $request->validate([
            'name' => "required|max: 255",
        ]);

        Categories::create($data);

        return redirect()->route('categories.index');
     }

     public function edit(string $id) {
        $categories = Categories::find($id);
        return view('categories.edit', compact('categories'));
     }

     public function update(Request $request, string $id) {
       $request->validate([
            'name' => "required|max: 255",
        ]);

        $categories = Categories::find($id);

        $categories->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
     }

     public function delete(string $id) { 
        Categories::find($id)->delete();

        return redirect()->route('categories.index');
     }
}
