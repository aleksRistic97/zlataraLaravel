<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porudzbenica extends Model
{
    use HasFactory;

    public function nakit( )
    {
        return  $this->hasMany(Nakit::class);
    }


    public function korisnik( )
    {
        return  $this->belongsTo(User::class);
    }
}
