<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advising extends Model
{
    use HasFactory;

    protected $table = 'advising';

    protected $fillable = [
        'student_id',
        'level',
        'semester',
        'year',
        'status',
        'admin_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function courses()
    {
        return $this->hasMany(StudentCourse::class, 'advising_id', 'id');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    public static function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    
    
}
