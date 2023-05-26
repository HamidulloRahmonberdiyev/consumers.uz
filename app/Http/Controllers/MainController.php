<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Post;
use App\Models\Question;
use App\Models\Rate;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main')->with([
            'posts' => Post::latest()->take(2)->get(),
            'rates' => Rate::take(3)->get(),
            'partners' => Partner::all(),
            'questions' => Question::all(),
        ]);
    }
}
