<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner:owner');        
    }
    
    public function index()
    {
        return view('backend.users.index')->with([
            'users' => User::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.users.create')->with([
            'roles' => Role::all(),
        ]);
    }

    public function store(StoreUserRequest $request)
    {
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('users', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role_id' => $request->role_id,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('users.index')->with('status', "$user->name nomli foydalanuvchi yaratildi!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(User $user)
    {
        return view('backend.users.edit')->with([
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        if (isset($user->photo)) {
            Storage::delete('public/' . $user->photo);
            if ($request->hasFile('photo')) {         
                $path = $request->file('photo')->store('users', 'public'); 
            }
        }
       
        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role_id' => $request->role_id,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('users.index')->with('status', "$user->name ismli foydalanuvchining o'zgarishlari saqlandi!");
    }

    public function destroy(User $user)
    {
        if (isset($user->photo)) {
            Storage::delete('public/' . $user->photo);
        }
        $user->delete();

        return redirect()->route('users.index')->with('status', "$user->name nomli foydalanuvchi o'chirildi!"); 
    }
}
