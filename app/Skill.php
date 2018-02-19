<?php

namespace App;

class Skill extends Model
{
    protected $primaryKey = 'id';
    public function jobs(){
        return $this->belongsToMany(Job::class);
    }
    public function employees(){
        return $this->belongsToMany(Employee::class);
    }
    public function getRouteKeyName(){
        return 'name';
    }
}
