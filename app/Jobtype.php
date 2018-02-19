<?php

namespace App;

class Jobtype extends Model
{
    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
