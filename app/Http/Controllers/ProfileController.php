<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        /*  if(auth()->user()->isNot($user))
        {
            abort(404);
        }
        */
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {

        $attributes = request()->validate([
            'username' =>  ['string', 'required', 'max:255', 'alpha_dash', 'unique:users,email,$user->id'],
            'name' =>  ['string', 'required', 'max:255'],
            'email' =>  ['email', 'required', 'max:255'],
            'avatar' => ['file'],
            'description' =>  ['string', 'required', 'max:255'],
            'password' =>  ['string', 'min:8', 'max:255', 'confirmed'],
        ]);
        if (request('avatar')) {
            $name = request('avatar')->store('/avatars');

            $attributes['avatar'] = "/storage/{$name}";
        }


        $user->update($attributes);

        return redirect($user->path());
    }
}
