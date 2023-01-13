<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Muzej;
use App\Models\Umetnik;

class Slika extends Model
{
    use HasFactory;

    public function muzej()
    {
        return $this->belongsTo(Muzej::class);
    }

    public function umetnik()
    {
        return $this->belongsTo(Umetnik::class);
    }
}
