<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "grades";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'teacher_id',
    ];
    
    public function teacher(){
        return $this->hasOne('App\Models\Teacher', 'id', 'teacher_id');
    }
}
