<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docteur extends Model
{
    protected $guarded = [

    ];
    function rendezvous(){
        return $this->hasOne(rendezvous::class);
    }
}
