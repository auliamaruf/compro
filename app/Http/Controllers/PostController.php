<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::with(['author', 'category'])->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function index()
    {
        $posts = Post::with(['author', 'category'])->latest()->paginate(9);
        return view('posts.index', compact('posts'));
    }
}
