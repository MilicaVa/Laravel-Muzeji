<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Slika;

class Umetnik extends Model
{
    use HasFactory;

    public function slike()
    {
        return $this->hasMany(Slika::class);
    }
}
