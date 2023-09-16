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
        $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->get();
        return view('user.blog.postCategory')->with('posts', $posts);
    }
    // public function expressentry()
    // {
    //     $posts = Post::where('category', 'Express Entry')->orderBy('created_at', 'desc')->take(5)->get();
    //     return view('user.blog.express-entry')->with('posts', $posts);
    // }

    // public function arrima()
    // {
    //     $posts = Post::where('category', 'Arrima')->orderBy('created_at', 'desc')->take(5)->get();
    //     return view('user.blog.arrima')->with('posts', $posts);
    // }

    // public function sp()
    // {
    //     $posts = Post::where('category', 'Study Permit')->orderBy('created_at', 'desc')->take(5)->get();
    //     return view('user.blog.study-permit')->with('posts', $posts);
    // }

    // public function wp()
    // {
    //     $posts = Post::where('category', 'Work Permit')->orderBy('created_at', 'desc')->take(5)->get();
    //     return view('user.blog.work-permit')->with('posts', $posts);
    // }

    // public function sponsorship()
    // {
    //     $posts = Post::where('category', 'Sponsorship')->orderBy('created_at', 'desc')->take(5)->get();
    //     return view('user.blog.sponsorship')->with('posts', $posts);
    // }
}
