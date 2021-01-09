<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    
    
    public function index(User $user)
    {   
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);  //prevents updating profile if user is not authenticated

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
        
    /********** If user doesn't want to change profile, leave the old one there********/ 
        if (request('image')) {
            $imagePath = request('image')->store('profile','public');
            
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
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
