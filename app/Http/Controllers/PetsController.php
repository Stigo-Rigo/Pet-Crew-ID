<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Models\Pet;
use App\Models\User;



class PetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('create');
    }

    public function store()
    {   
        $data = request()->validate([
            'nickname' => 'required',
            'species' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'color' => 'required',
            'description' => 'required',

        ]);

        
        auth()->user()->pets()->create([
            'nickname' => $data['nickname'],
            'species' => $data['species'],
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'color' => $data['color'],
            'description' => $data['description'],
            ]);
            
            return redirect('/');
    }

    public function show(Pet $pet)
    {
        return view('profiles.showPet', compact('pet'));
    }

    public function edit(Pet $pet)
    {
        return view('profiles.editPet', compact('pet'));
    }

    public function update(Pet $pet)
    {
        $data = request()->validate([
            'nickname' => 'required',
            'date_of_birth' => 'required',
            'gender' => "required",
            'description' => '',
            'image' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile','public');
            
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }
        
        $pet->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$pet->user->id}");

    }
    
}

