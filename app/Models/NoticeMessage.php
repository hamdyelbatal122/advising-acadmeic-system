<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id ',
        'notice_id',
        'admin_id',
        'message',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function notice()
    {
        return $this->belongsTo(Notice::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d M, Y', strtotime($value));
    }
    
}
