<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsumerRequest;
use App\Models\Address;
use App\Models\Consumer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminConsumerController extends Controller
{
    public function index()
    {
        return view('backend.consumers.index')->with([
            'consumers' => Consumer::where('user_id', auth()->user()->id)->latest('date')->paginate(10),
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function create()
    {
        return view('backend.consumers.create')->with([
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function store(StoreConsumerRequest $request)
    {
        $consumer = Consumer::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'address_id' => $request->address_id,
            'quantity' => $request->quantity,
            'returned' => $request->returned,
            'date' => $request->date,
        ]);

        return redirect()->route('consumers.index')->with('status', "ID $consumer->id bo'lgan iste'molchi qo'shildi.");
    }

    public function show(Consumer $consumer)
    {
        return view('backend.addresses.show')->with([
            'consumer' => $consumer,
        ]);
    }

    public function edit(Consumer $consumer)
    {
        return view('backend.consumers.edit')->with([
            'consumer' => $consumer,
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function update(StoreConsumerRequest $request, Consumer $consumer)
    {
        $consumer->update([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'address_id' => $request->address_id,
            'quantity' => $request->quantity,
            'returned' => $request->returned,
            'date' => $request->date,
        ]);

        return redirect()->route('consumers.index')->with('status', "ID $consumer->id bo'lgan iste'molchini o'zgarishlari saqlandi.");
    }

    public function destroy(Consumer $consumer)
    {
        $consumer->delete();

        Consumer::where('user_id', auth()->user()->id)->where('deleted_at', '<=', Carbon::now()->subDays(30))->forceDelete();

        return redirect()->route('consumers.index')->with('status', "ID $consumer->id bo'lgan iste'molchi savatga tashlandi.");
    }
}
