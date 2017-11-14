<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    // 
       /*
     * Table name
    */
    protected $table = 'users';

    /*
     * Fillable fields for protecting mass assignment vulnerability
     */
    protected $fillable = [
        'name', 'username', 'email', 'mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}