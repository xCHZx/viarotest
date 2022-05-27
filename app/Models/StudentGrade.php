<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentGrade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "grades_students";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'section',
        'grade_id',
        'student_id',
    ];
    
    public function student(){
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }
    public function grade(){
        return $this->hasOne('App\Models\Grade', 'id', 'grade_id');
    }
}
