<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestellingen extends Model
{
    use HasFactory;

    protected $table = 'bestellingen';

    protected $fillable = ['naam', 'pizza', 'prijs', 'adres'];

    public function pizza()
    {
        return $this->hasOne(Pizza::class);
    }

}
