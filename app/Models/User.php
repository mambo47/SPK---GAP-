<?php

namespace App\Models;


use Illuminate\Contracts\Auth\Authenticatableclass;
// use Illuminate\Contracts\Auth\Authenticatable;
// use illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable 
{

    // public function getAuthIdentifierName()
    // {
    //     return 'id';
    // }

    // public function getAuthIdentifier()
    // {
    //     return $this->getKey();
    // }

    // public function getAuthPassword()
    // {
    //     return $this->password;
    // }
    
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}