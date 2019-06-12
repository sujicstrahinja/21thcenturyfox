<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Model
{
    use Notifiable;

    protected $table = 'user';
    public $timestamps = true;

    protected $fillable = [
      'name', 'email', 'password', 'role_id'
    ];

    protected $hidden = [
        'password'
    ];

//    public function setPasswordAttribute($password)
//    {
//        $this->attributes['password'] = bcrypt($password);
//    }

    public function getUser($name, $password) {
        return \DB::table("user")
            ->where([
                "name" => $name,
                "password" => md5($password)
            ])
            ->first();
    }
}