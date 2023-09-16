<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImgPost;
use Illuminate\Support\Facades\File;

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
        $image = ImgPost::where('id', $post->img_post_id)->first();
        // You can then pass $post and $category to a view and display them
        return view('user.blog.post', compact('post', 'category', 'image'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.blog.writing-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'content' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $username = auth()->user()->username;
            $uniqueId = uniqid(auth()->user()->username . '_maplemind_');
            $fileName = $uniqueId . $image->getClientOriginalName();

            // Create a folder if it doesn't exist
            $folderPath = public_path("img/$username");
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0755, true);
            }

            // Move the image to the user's folder
            $image->move($folderPath, $fileName);

            // Set the full file path including the folder in the database
            $filePath = "img/$username/$fileName";
        } else {
            $filePath = null;
        }

        $imgPost = ImgPost::create([
            'path' => $filePath,
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'likes' => 0,
            'dislikes' => 0,
            'img_post_id' => $imgPost->id,
            'category_id' => $request->category,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('blog.index');
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
