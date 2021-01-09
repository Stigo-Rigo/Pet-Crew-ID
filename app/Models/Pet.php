<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pet extends Model
{
    protected $guarded = [];

    /*********** Accessor for age **************/
    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes[('date_of_birth')])->age;
    }
    
    /******** Setting a default image for Pet *********/
    public function defaultPetImage()
    {
        $imagePath = ($this->image) ? $this->image:'/profile/V8r4atkwwvG04qBtDTBFiCFpPGrbaGUV1fnI84NZ.jpeg';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
