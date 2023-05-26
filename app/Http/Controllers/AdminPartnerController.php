<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner:owner');
    }
    
    public function index()
    {
        return view('backend.partners.index')->with([
            'partners' => Partner::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.partners.create');
    }

    public function store(StorePartnerRequest $request)
    {
        $path = $request->file('image')->store('partners', 'public');

        $partner = Partner::create([
            'name' => $request->name,
            'image' => $path,
        ]);

        return redirect()->route('partners.index')->with('status', "ID $partner->id bo'lgan yangi hamkor qo'shildi.");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Partner $partner)
    {
        return view('backend.partners.edit')->with([
            'partner' => $partner,
        ]);
    }

    public function update(StorePartnerRequest $request, Partner $partner)
    {
        if (isset($partner->image)) {
            Storage::delete('public/' . $partner->image);
        }
        $path = $request->file('image')->store('partners', 'public');

        $partner->update([
            'name' => $request->name,
            'image' => $path,
        ]);

        return redirect()->route('partners.index')->with('status', "ID $partner->id bo'lgan hamkorni o'zgarishlari saqlandi.");
    }

    public function destroy(Partner $partner)
    {
        if (isset($partner->image)) {
            Storage::delete('public/' . $partner->image);
        }
        $partner->delete();

        return redirect()->route('partners.index')->with('status', "ID $partner->id bo'lgan hamkor o'chirildi.");
    }
}
