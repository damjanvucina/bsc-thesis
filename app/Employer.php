<?php

namespace App;

class Employer extends Model
{
    protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function jobs(){
        return $this->hasMany(Job::class);
    }
    public function employees(){
        return $this->belongsToMany(Employee::class);
    }
}
