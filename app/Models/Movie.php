<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model 
{

    protected $table = 'movie';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'headline',
        'image',
        'thumbnail',
        'youtube_link',
        'year',
        'rating',
        'featured',
        'viewed',
    ];

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }
}