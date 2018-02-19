<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'town_id', 'usertype'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function employers(){
        return $this->hasMany(Employer::class);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function town()
    {
        return $this->belongsTo(Town::class, 'town_id');
    }

}
