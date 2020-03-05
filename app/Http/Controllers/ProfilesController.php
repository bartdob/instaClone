<?php

use App\User;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Intervetion\Image\Fasades\Image;

//use App\Http\Controllers\Image;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    //
    public function index($user)
    {
        

    	$user = \App\User::findOrFail($user);
        
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $postCount = $user->posts->count();

        $followCount = $user->profile->followers->count();

        $followingCount = $user->following->count();
        
        return view('profiles.index', compact('user', 'follows', 'postCount', 'followCount', 'followingCount'));
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

        //auth()->$user->profile->update($data);

        if(request('image')){

        $imagePath=(request('image')->store('profile', 'public'));

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000);

        $image->save();

        $imageArray = ['image' => $imagePath];

        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");

    }
}
