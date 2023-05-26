<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role']);
    }
    
    public function settings()
    {
        return view('backend.user.settings');
    }

    public function edit()
    {
        return view('backend.user.edit')->with([
            'user' => auth()->user(),
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => $user->password,
            'phone' => $request->phone,
            'role_id' => $user->role_id,
            'photo' => $user->photo,
        ]);

        return redirect()->route('home')->with('status', "O'zgartirishlaringiz saqlandi!");
    }

    public function password()
    {
        return view('backend.user.password')->with([
            'user' => auth()->user(),
        ]);
    }

    public function password_update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email,
            'password' => Hash::make($request->password),
            'phone' => $user->phone,
            'role_id' => $user->role_id,
            'photo' => $user->photo,
        ]);

        return redirect()->route('home')->with('status', "Parolingiz o'zgartirildi.!");
    }

    public function photo()
    {
        return view('backend.user.photo')->with([
            'user' => auth()->user(),
        ]);
    }

    public function photo_update(UpdateUserRequest $request, User $user)
    {
        if ($request->hasFile('photo')) {
            Storage::delete('public/' . $user->photo);
            $path = $request->file('photo')->store('users', 'public');
        }

        $user->update([
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email,
            'password' => $user->password,
            'phone' => $user->phone,
            'role_id' => $user->role_id,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('home')->with('status', "Profil rasmngiz o'zgartirildi.!");
    }
}
