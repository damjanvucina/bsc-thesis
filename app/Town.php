<?php

namespace App;

class Town extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function users(){
        return $this->hasMany(User::class);
    }
}
