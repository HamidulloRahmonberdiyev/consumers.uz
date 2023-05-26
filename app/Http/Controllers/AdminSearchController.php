<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Consumer;
use Illuminate\Http\Request;

class AdminSearchController extends Controller
{
    public function search()
    {
        return view('backend.search.search');    
    }

    public function consumers_search(Request $request)
    {
        $consumers = Consumer::where([
            ['user_id', auth()->user()->id],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('surname', 'LIKE', '%' . $search . '%')
                        ->orWhere('phone', 'LIKE', '%' . $search . '%')
                        ->get();
                }
            }]
        ])->latest('date')->paginate(10);

        return view('backend.consumers.index')->with([
            'consumers' => $consumers,
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function trashed_search(Request $request)
    {
        $consumers = Consumer::onlyTrashed()->where([
            ['user_id', auth()->user()->id],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('surname', 'LIKE', '%' . $search . '%')
                        ->orWhere('phone', 'LIKE', '%' . $search . '%')
                        ->get();
                }
            }]
        ])->paginate(10);

        return view('backend.trashed.index')->with([
            'consumers' => $consumers,
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
