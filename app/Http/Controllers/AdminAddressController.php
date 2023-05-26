<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;

class AdminAddressController extends Controller
{
    public function index()
    {
        return view('backend.addresses.index')->with([
            'addresses' => Address::where('user_id', auth()->user()->id)->paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.addresses.create');
    }

    public function store(StoreAddressRequest $request)
    {
        $address = Address::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
        ]);

        return redirect()->route('addresses.index')->with('status', "ID $address->id bo'lgan manzil yaratildi.");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Address $address)
    {
        return view('backend.addresses.edit')->with([
            'address' => $address,
        ]);
    }

    public function update(StoreAddressRequest $request, Address $address)
    {
        $address->update([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
        ]);

        return redirect()->route('addresses.index')->with('status', "ID $address->id bo'lgan manzil o'zgartirishlari saqlandi.");
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return redirect()->route('addresses.index')->with('status', "ID $address->id bo'lgan manzil o'chirildi.");
    }
}
