<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pizza extends Model
{
    protected $table = 'pizza';
    protected $fillable = [
        'naam',
        'beschrijving',
        'ingredienten',
        'prijs',
    ];

    public function bestellingen()
    {
        return $this->hasOne(Bestellingen::class);
    }
}
