<?php

// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Di sini Anda bisa mengambil data kategori dari database
        // $categories = Category::all();
        
        return view('categories.index');
    }
}
