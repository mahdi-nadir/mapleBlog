<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ImgUser;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $image = ImgUser::where('id', Auth::user()->img_user_id)->first();
        $image == NULL ? $image = 'default.png' : $image = $image->path;
        $categories = Category::all();
        // posts of user
        $userPosts = Post::where('user_id', Auth::user()->id)->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('user.blog.home-blog', compact('posts', 'categories', 'image', 'userPosts'));
    }

    public function filterPosts(Request $request)
    {
        $categoryId = $request->input('category');
        $posts = Post::where('category_id', $categoryId)->get();
        return response()->json($posts);
    }

    public function showByCategory($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(5);
        return view('user.blog.postCategory')->with('posts', $posts);
    }
}
