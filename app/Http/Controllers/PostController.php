<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ImgPost;
use App\Models\Category;
use App\Models\PostLike;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $category = Category::where('name_en', $category)->firstOrFail();

        $post = Post::where('category_id', $category->id)
            ->where('id', $postId)
            ->firstOrFail();
        $image = ImgPost::where('id', $post->img_post_id)->first();
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

        $filePath = '';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $username = auth()->user()->username;
            $uniqueId = uniqid(auth()->user()->username . '_maplemind_');
            $fileName = $uniqueId . $image->getClientOriginalName();

            $folderPath = public_path("img/posts/$username");
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0755, true);
            }

            $image->move($folderPath, $fileName);

            $filePath = "img/posts/$username/$fileName";
        }

        $imgPost = ImgPost::create([
            'path' => $filePath,
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'img_post_id' => $filePath != '' ? $imgPost->id : null,
            'category_id' => $request->category,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('blog.index');
    }


    // public function toggleLike(Request $request)
    // {
    //     $postId = $request->input('postId');
    //     $type = $request->input('type');
    //     $user = auth()->user(); 

    //     // Check if the user has already liked the post
    //     $existingLike = PostLike::where('post_id', $postId)
    //         ->where('user_id', $user->id)
    //         ->first();

    //     if ($existingLike) {
    //         $existingLike->delete();
    //         $result = ['action' => 'unliked'];
    //     } else {
    //         $postLike = new PostLike();
    //         $postLike->post_id = $postId;
    //         $postLike->user_id = $user->id;
    //         $postLike->is_like = true; 
    //         $postLike->save();
    //         $result = ['action' => 'liked'];
    //     }

    //     return response()->json($result);
    // }




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
    public function destroy(string $postId)
    {
        $post = Post::where('id', $postId)->firstOrFail();
        $image = ImgPost::where('id', $post->img_post_id)->first();
        if ($image != null) {
            File::delete(public_path($image->path));
            $image->delete();
        }
        $post->delete();
        return redirect()->route('blog.index');
    }
}
