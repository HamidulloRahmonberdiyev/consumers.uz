<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index()
    {
        return view('frontend.rates.rates')->with([
            'rates' => Rate::paginate(6),
        ]);
    }
}
