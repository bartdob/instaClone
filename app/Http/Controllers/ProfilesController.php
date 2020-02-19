<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index($user)
    {
        

    	$user = \App\User::findOrFail($user);
        
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        
        return view('profiles.index', [
        	'user' => $user,
            'follows' => $follows
        ]);
    }

    public function edit(\App\User $user)
    {
        $this->authorize('update', $user->profile );
    	return view('profiles.edit', compact('user'));
    }

    public function update(\App\User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'desc'  => 'required',
            'url'   => 'url',
            'image' => '',    
    ]);

        auth()->$user->profile->update($data);

        return redirect("/profile/{$user->id}");

    }
}
