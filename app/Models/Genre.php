<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model 
{

    protected $table = 'genre';
    public $timestamps = true;

    protected $fillable = [
        'name'
    ];

    public function movies() {
        return $this->belongsTo(Movie::class);
    }
}