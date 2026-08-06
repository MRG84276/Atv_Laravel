<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $table = "artista";

    protected $fillable = [
        'name',
        'foto_url',
        'data_origem',
    ];

    public function album(){

        return $this->hasMany(Album::class);
    }

}
