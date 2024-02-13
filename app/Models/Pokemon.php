<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pokemon extends Model
{
    use HasFactory;
    use SoftDeletes;
    // Riassegnazione del nome della Tabella
    public $table = 'pokemons';
    protected $fillable = [
        'name',
        'type',
        'level',
        'attack',
        'img',
        'description',
    ];
}
