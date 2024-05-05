<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'name',
        'code',
        'hours',
        'professor_id',
        'day_of_lecture',
        'time_of_lecture',
        'duration_of_lecture',
        'lab',
        'day_of_lab',
        'time_of_lab',
        'duration_of_lab',
        'exam_date',

    ];

    public function professor()
    {
        return $this->belongsTo(Admin::class, 'professor_id', 'id');
    }


    protected $appends = ['end_of_lecture', 'end_of_lab', ];

    public function getEndOfLectureAttribute()
    {
        $time = strtotime($this->time_of_lecture);
        $end = strtotime('+' . $this->duration_of_lecture . ' hours', $time);
        return date('h:i A', $end);
    }

    public function getEndOfLabAttribute()
    {
        $time = strtotime($this->time_of_lab);
        $end = strtotime('+' . $this->duration_of_lab . ' hours', $time);
        return date('h:i A', $end);
    }







}
