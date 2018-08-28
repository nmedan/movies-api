<?php

namespace App;

use App\Http\Request;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'director', 'imageUrl', 'duration',
    'releaseDate', 'genre'];

    public static function search($term) {
        return Movie::where('title', 'LIKE',  '%'.$term.'%')->get();
    }
}
