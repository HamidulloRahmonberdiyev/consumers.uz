<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner:owner');
    }
    
    public function index()
    {
        return view('backend.informations.index')->with([
            'informations' => Information::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.informations.create');
    }

    public function store(StoreInformationRequest $request)
    {
        $path = $request->file('image')->store('informations', 'public');

        $information = Information::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
        ]);

        return redirect()->route('informations.index')->with('status', "Ma'lumot qo'shildi.");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Information $information)
    {
        return view('backend.informations.edit')->with([
            'information' => $information,
        ]);
    }

    public function update(StoreInformationRequest $request, Information $information)
    {
        if (isset($information->image)) {
            Storage::delete('public/' . $information->image);
        }
        $path = $request->file('image')->store('informations', 'public');

        $information->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
        ]);

        return redirect()->route('informations.index')->with('status', "ID  $information->id bo'lgan ma'lumotdagi o'zgartirishlar saqlandi.");
    }

    public function destroy(Information $information)
    {
        if (isset($information->image)) {
            Storage::delete('public/' . $information->image);
        }
        $information->delete();

        return redirect()->route('informations.index')->with('status', "ID  $information->id bo'lgan ma'lumot o'chirildi.");
    }
}
