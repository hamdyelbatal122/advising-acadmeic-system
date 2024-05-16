<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'aadvising_id',
        'course_id',
        'grade',
        'admin_id',
    ];

    public function advising()
    {
        return $this->belongsTo(Advising::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    // append mark 

    protected $appends = ['grade_of_mark', 'mark'];


    public function getMarkAttribute(){

        if($this->grade >= 90){
            return 4.00;
        }elseif($this->grade >= 85){
            return 3.75;
        }elseif($this->grade >= 80){
            return 3.50;
        }elseif($this->grade >= 75){
            return 3.25;
        }elseif($this->grade >= 70){
            return 3.00;
        }elseif($this->grade >= 65){
            return 2.75;
        }elseif($this->grade >= 60){
            return 2.50;
        }elseif($this->grade >= 55){
            return 2.25;
        }elseif($this->grade >= 50){
            return 2.00;
        }elseif($this->grade >= 45){
            return 1.75;
        }elseif($this->grade >= 40){
            return 1.50;
        }elseif($this->grade >= 35){
            return 1.25;
        }elseif($this->grade >= 30){
            return 1.00;
        }else{
            return 0.00;
        }

    }

    public function getGradeOfMarkAttribute()
    {
        if($this->grade >= 90){
            return 'A+';
        }elseif($this->grade >= 85){
            return 'A';
        }elseif($this->grade >= 80){
            return 'A-';
        }elseif($this->grade >= 75){
            return 'B+';
        }elseif($this->grade >= 70){
            return 'B';
        }elseif($this->grade >= 65){
            return 'B-';
        }elseif($this->grade >= 60){
            return 'C+';
        }elseif($this->grade >= 55){
            return 'C';
        }elseif($this->grade >= 50){
            return 'C-';
        }elseif($this->grade >= 45){
            return 'D+';
        }elseif($this->grade >= 40){
            return 'D';
        }elseif($this->grade >= 35){
            return 'D-';
        }elseif($this->grade >= 30){
            return 'E';
        }else{
            return 'F';
        }
    }

    public static function calculateSemesterGrade($myGrades, $count)
    {
        $percentage = $myGrades / $count;

        if ($percentage >= 90) {
            return 'A+';
        } elseif ($percentage >= 85) {
            return 'A';
        } elseif ($percentage >= 80) {
            return 'A-';
        } elseif ($percentage >= 75) {
            return 'B+';
        } elseif ($percentage >= 70) {
            return 'B';
        } elseif ($percentage >= 65) {
            return 'B-';
        } elseif ($percentage >= 60) {
            return 'C+';
        } elseif ($percentage >= 55) {
            return 'C';
        } elseif ($percentage >= 50) {
            return 'C-';
        } elseif ($percentage >= 45) {
            return 'D';
        } else {
            return 'F';
        }
    }

    


}
