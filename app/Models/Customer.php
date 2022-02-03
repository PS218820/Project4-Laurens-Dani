<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bestellingen()
    {
        return $this->hasMany(Bestellingen::class);
    }

    public function Winkelwagen()
    {
        return $this->hasone(Winkelwagen::class);
    }
}
