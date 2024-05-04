<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'title',
        'subject',
        'title',
        'status',
    ];


    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function messages()
    {
        return $this->hasMany(NoticeMessage::class,'notice_id','id');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d M, Y', strtotime($value));
    }

    public function scopeActive($query)
    {
        return $query->where('status','active');
    }

    

}
