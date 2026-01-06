<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // Daftar berita
    public function berita()
    {
        $posts = Post::where('type', 'berita')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->paginate(9);

        return view('posts.berita', compact('posts'));
    }

    // Daftar pengumuman
    public function pengumuman()
    {
        $posts = Post::where('type', 'pengumuman')
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->paginate(9);

        return view('posts.pengumuman', compact('posts'));
    }

    // Detail berita/pengumuman
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        
        // Ambil post terkait
        $relatedPosts = Post::where('type', $post->type)
            ->where('id', '!=', $post->id)
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('posts.show', compact('post', 'relatedPosts'));
    }
}
