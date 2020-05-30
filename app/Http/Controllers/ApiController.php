<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ApiController extends Controller
{
    
    public function getAllCategories(){
        $categories = Category::select('id', 'name', 'image')->orderBy('name', 'desc')->get();
        return response()->json($categories);
    }

}
