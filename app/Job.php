<?php

namespace App;

use Carbon\Carbon;

class Job extends Model
{
    protected $primaryKey = 'id';

    public function employer()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }

    public function jobType()
    {
        return $this->belongsTo(Jobtype::class, 'jobtype_id');
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function scopeFilterStart($query, $filters)
    {

        if ($month = $filters['month']) {
            $query->whereMonth('startDate', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('startDate', $year);
        }
    }

    public function scopeFilterCreate($query, $filters)
    {

        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archivesStart()
    {
        return static::selectRaw('year(startdate) year, monthname(startdate) month, COUNT(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(startdate) desc')
            ->get()
            ->toArray();
    }

    public static function archivesCreate()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, COUNT(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}
