<?php

namespace App;

class Language extends Model
{
    protected $primaryKey = 'id';

    public function employees(){
        return $this->belongsToMany(Employee::class);
    }

    public function jobs(){
        return $this->belongsToMany(Job::class);
    }

    public function getRouteKeyName(){
        return 'name';
    }
}
