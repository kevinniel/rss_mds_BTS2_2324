<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // BASE
        // $categories = Category::all();
        // dd($categories[0]->children);
        // dd($categories[7]->parent);

        // BONNE MANIERE
        // $categories = Category::where('parent_id', null)->get();
        $categories = Category::where('parent_id', null)->with('children')->get();
        // dd($categories[0]);

        $toto = "toto";
        // dd($categories); 
        return view('categories.index', compact('categories', 'toto'));
    }

    public function create()
    {
        $parent_categories = Category::where('parent_id', null)->get();
        return view('categories.create', compact('parent_categories'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $parent_categories = Category::where('parent_id', null)->get();
        return view('categories.edit', compact('category', 'parent_categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
