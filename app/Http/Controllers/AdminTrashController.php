<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Consumer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminTrashController extends Controller
{
    public function index()
    {
        return view('backend.trashed.index')->with([
            'consumers' => Consumer::onlyTrashed()->where('user_id', auth()->user()->id)->where('deleted_at', '!=', null)->latest('date')->paginate(10),
            'addresses' => Address::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function delete(Request $request)
    {
        Consumer::where('id', $request->id)->withTrashed()->forceDelete();

        return redirect()->route('trashed.index')->with('status', "Iste'molchi bazadan butkul o'chirildi.");
    }

    public function deleteAll()
    {
        DB::table('consumers')->where('user_id', auth()->user()->id)->delete();

        return redirect()->route('trashed.index')->with('status', "Savatcha tozalandi.");
    }

    public function restore(Request $request)
    {
        Consumer::where('id', $request->id)->onlyTrashed()->restore();

        return redirect()->route('trashed.index')->with('status', "ID iste'molchi qayta tiklandi.");
    }
}
