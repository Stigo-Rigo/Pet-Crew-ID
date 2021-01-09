<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    //------setting a default image for the profile if a new user logs in--------------//
    public function DefaultProfileImage()
    {
        $imagePath = ($this->image) ? $this->image:'/profile/18gOsSlJ3WUeIEVCwVrDhKUE4GKemkE6ldavLmEX.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
