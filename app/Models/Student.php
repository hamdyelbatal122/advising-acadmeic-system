<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{

    protected $guard = 'student';
        
    use HasFactory;
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name', 
        'last_name',
        'email',
        'nationality',
        'national_id',
        'gender',
        'birth',
        'blood',
        'religion',
        'phone',
        'address',
        'college',
        'level',
        'gpa',
        'supervisor_id',
        'password',
        'currant_password',
        'admin_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',

    ];


    protected $appends = ['credit_hours_available'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function supervisor()
    {
        return $this->belongsTo(Admin::class, 'supervisor_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function studentCourses()
    {
        return $this->hasMany(StudentCourse::class, 'student_id', 'id');
    }

    public function advising()
    {
        return $this->hasMany(Advising::class, 'student_id', 'id');
    }

    public function activeAdvising()
    {
        return $this->hasOne(Advising::class, 'student_id', 'id')->where('status', 'active');
    }

    public function lastAdvising()
    {
        return $this->hasOne(Advising::class, 'student_id', 'id')->where('status', 'completed')->latest();
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    public function notices()
    {
        return $this->hasMany(Notice::class, 'student_id', 'id');
    }

    public function getCreditHoursAvailableAttribute()
    {
        $gpa = $this->gpa;
        $level = $this->level;
        $lastAdvising = $this->lastAdvising;
        
        if ($level == 1 && $gpa == 0 && empty($lastAdvising) || $gpa >= 2) {

            return 15;

        }elseif( $gpa < 2 && $gpa > 1 ){

        return 12;

        }elseif( $gpa <= 1 ){

        return 9;

         }else{
            return 0;
         }


    }
}
