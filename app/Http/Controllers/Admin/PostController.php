<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required|in:berita,pengumuman',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['title', 'type', 'content', 'author']);
        $data['slug'] = Str::slug($request->title) . '-' . time();
        $data['published_at'] = $request->has('publish') ? now() : null;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil dibuat!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required|in:berita,pengumuman',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['title', 'type', 'content', 'author']);
        
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        if ($request->has('publish') && !$post->published_at) {
            $data['published_at'] = now();
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil diupdate!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil dihapus!');
    }
}
