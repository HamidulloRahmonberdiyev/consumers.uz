<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Consumer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminFilterController extends Controller
{
    public function consumers_filter(Request $request)
    {
        $consumers = Consumer::where([
            ['user_id', auth()->user()->id],
            [function ($query) use ($request) {
                if (($filter = $request->filter)) {
                    $query->orWhere('address_id', 'LIKE', '%' . $filter . '%')->get();
                }
            }]
        ])->latest('date')->paginate(10);
    
        return view('backend.consumers.index')->with([
            'consumers' => $consumers,
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function consumers_active()
    {
        return view('backend.consumers.index')->with([
            'consumers' => Consumer::where('user_id', auth()->user()->id)->whereDay('date', '>=', Carbon::now()->format('d') - 3)->get(),
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function consumers_passive()
    {
        return view('backend.consumers.index')->with([
            'consumers' => Consumer::where('user_id', auth()->user()->id)->whereBetween('date', [Carbon::now()->subDays(8), Carbon::now()->subDays(4)])->get(),
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function consumers_noactive()
    {
        return view('backend.consumers.index')->with([
            'consumers' => Consumer::where('user_id', auth()->user()->id)->whereDay('date', '<', now()->format('d') - 7)->get(),
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

}
