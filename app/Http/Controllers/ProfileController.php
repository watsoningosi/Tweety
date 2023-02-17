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
}
