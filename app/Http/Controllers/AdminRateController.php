<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRateRequest;
use App\Models\Rate;
use Illuminate\Http\Request;

class AdminRateController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner:owner');
    }
    
    public function index()
    {
        return view('backend.rates.index')->with([
            'rates' => Rate::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.rates.create');
    }

    public function store(StoreRateRequest $request)
    {
        $rate = Rate::create([
            'title' => $request->title,
            'price' => $request->price,
            'lifetime' => $request->lifetime,
            'content' => $request->content,
        ]);

        return redirect()->route('rates.index')->with('status', "ID $rate->id bo'lgan tarif yaratildi!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Rate $rate)
    {
        return view('backend.rates.edit')->with([
            'rate' => $rate,
        ]);
    }

    public function update(StoreRateRequest $request, Rate $rate)
    {
        $rate->update([
            'title' => $request->title,
            'price' => $request->price,
            'lifetime' => $request->lifetime,
            'content' => $request->content,
        ]);

        return redirect()->route('rates.index')->with('status', "ID $rate->id bo'gan tarifdagi o'zgartirishlar saqlandi.");
    }

    public function destroy(Rate $rate)
    {
        $rate->delete();

        return redirect()->route('rates.index')->with('status', "ID $rate->id bo'gan tarif o'chirildi.");
    }
}
