<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::with(['author', 'category'])
            ->where('status', 'published')
            ->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function index()
    {
        $posts = Post::with(['author', 'category'])
            ->where('status', 'published')
            ->latest()
            ->paginate(9);
        return view('posts.index', compact('posts'));
    }
}
