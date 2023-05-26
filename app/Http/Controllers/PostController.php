<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('frontend.posts.posts')->with([
            'posts' => Post::latest()->paginate(6),
        ]);
    }
}
