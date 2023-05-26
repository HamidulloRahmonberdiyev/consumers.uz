<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        return view('frontend.informations.informations')->with([
            'informations' => Information::paginate(10),
        ]);
    }
}
