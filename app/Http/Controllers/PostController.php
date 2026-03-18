<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post berhasil diupdate');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus');
    }

    public function detail(Post $post)
    {
        $title = $post->judul;
        return view('posts.detail', compact('post','title'));
    }
}