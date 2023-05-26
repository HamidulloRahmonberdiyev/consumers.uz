<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner:owner');
    }
    
    public function index()
    {
        return view('backend.posts.index')->with([
            'posts' => Post::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $path = $request->file('image')->store('posts', 'public');

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
        ]);

        return redirect()->route('posts.index')->with('status', "ID $post->id bo'lgan post qo'shildi!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Post $post)
    {
        return view('backend.posts.edit')->with([
            'post' => $post,
        ]);
    }

    public function update(StorePostRequest $request, Post $post)
    {
        if (isset($post->image)) {
            Storage::delete('public/' . $post->image);
        }
        $path = $request->file('image')->store('posts', 'public');

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
        ]);

        return redirect()->route('posts.index')->with('status', "ID $post->id bo'lgan postdagi o'zgartirishlar saqlandi!");
    }

    public function destroy(Post $post)
    {
        if (isset($post->image)) {
            Storage::delete('public/' . $post->image);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('status', "ID $post->id bo'lgan post o'chirildi!");
    }
}
