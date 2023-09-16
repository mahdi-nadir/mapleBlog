<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request, $category, $postId)
    // {
    //     $category = Category::where('id', $category)->firstOrFail();
    //     $post = Post::where('id', $postId)->where('category_id', $category->id)->firstOrFail();
    //     return view('user.blog.post')->with('post', $post);
    // }
    public function index($category, $postId)
    {
        // Find the category by ID
        $category = Category::where('name', $category)->firstOrFail();

        // Find the post by ID and category ID
        $post = Post::where('id', $postId)
            ->where('category_id', $category->id)
            ->firstOrFail();

        // You can then pass $post and $category to a view and display them
        return view('user.blog.post', compact('post', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
