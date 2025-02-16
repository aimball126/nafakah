<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $fillable = [
        'username',
        'telephone',
        'password',
        'type',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->password = bcrypt($user->password); // Hash the password
        });
    }
}
