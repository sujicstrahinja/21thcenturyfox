<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model 
{

    protected $table = 'message';
    public $timestamps = true;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'subject', 'message'
    ];
}