<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {   
        $categories = Category::all();
        return view('home.index', compact('categories'));
    }
}