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
}
