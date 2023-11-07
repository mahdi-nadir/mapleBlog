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
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        // $posts->load('user.image');
        return view('user.blog.home-blog', compact('posts', 'categories', 'image', 'userPosts'));
    }

    public function filterPosts(Request $request)
    {
        $categoryId = $request->input('category');

        $image = ImgUser::where('id', Auth::user()->img_user_id)->first();
        $image == NULL ? $image = 'default.png' : $image = $image->path;
        $categories = Category::all();
        $userPosts = Post::where('user_id', Auth::user()->id)->get();

        if ($categoryId == null) {
            $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        } else {
            $posts = Post::where('category_id', $categoryId)->orderBy('created_at', 'desc')->paginate(5);
        }

        return view('user.blog.home-blog', compact('posts', 'categories', 'image', 'userPosts'));
    }

    public function getAllPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return response()->json($posts);
    }

    public function showByCategory($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(5);
        return view('user.blog.postCategory')->with('posts', $posts);
    }

    public function postSearch(Request $request)
    {
        $search = $request->input('search');

        $image = ImgUser::where('id', Auth::user()->img_user_id)->first();
        $image == NULL ? $image = 'default.png' : $image = $image->path;
        $categories = Category::all();
        $userPosts = Post::where('user_id', Auth::user()->id)->get();

        $posts = Post::where(function ($query) use ($search) {
            $query->where('title', 'LIKE', "%$search%")
                ->orWhere('content', 'LIKE', "%$search%");
        })->orWhereHas('category', function ($query) use ($search) {
            $query->where('name_en', 'LIKE', "%$search%")
                ->orWhere('name_fr', 'LIKE', "%$search%");
        })->orWhereHas('user', function ($query) use ($search) {
            $query->where('username', 'LIKE', "%$search%");
        })/* ->orWhereHas('comment', function ($query) use ($search) {
            $query->where('content', 'LIKE', "%$search%");
        }) */->paginate(5);

        return view('user.blog.home-blog', compact('posts', 'categories', 'image', 'userPosts'));
    }
}
