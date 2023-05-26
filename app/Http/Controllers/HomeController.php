<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Consumer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role']);
    }
    
    public function index()
    {
        return view('home')->with([
            'consumers' => Consumer::where('user_id', auth()->user()->id)->get(),
            'consumers_active' => Consumer::where('user_id', auth()->user()->id)->whereDay('date', '>=', now()->format('d') - 3)->get(),
            'consumers_passive' => Consumer::where('user_id', auth()->user()->id)->whereBetween('date', [Carbon::now()->subDays(8), Carbon::now()->subDays(4)])->get(),
            'consumers_noactive' => Consumer::where('user_id', auth()->user()->id)->whereDay('date', '<', now()->format('d') - 7)->get(),
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
