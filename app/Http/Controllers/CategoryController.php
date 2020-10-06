<?php


namespace App\Http\Controllers;
use App\Category;

class CategoryController extends Controller
{
    public function index($id)
    {
        $posts = Category::find($id)->posts;
        return view('categories.index',compact('posts'));
    }
}
