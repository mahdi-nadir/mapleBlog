<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('user.blog.home-blog')->with('posts', $posts);
    }

    public function showByCategory($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(5);
        return view('user.blog.postCategory')->with('posts', $posts);
    }
}
