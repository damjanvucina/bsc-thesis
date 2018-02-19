<?php

namespace App;

class Employee extends Model
{
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function languages(){
        return $this->belongsToMany(Language::class);
    }

    public function skills(){
        return $this->belongsToMany(Skill::class);
    }

    public function employers(){
        return $this->belongsToMany(Employer::class);
    }

}
