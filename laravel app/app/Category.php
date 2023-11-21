<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function students()
    {
        return $this->belongsToMany(Student::class, 'category_student');
    }
    
    public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'category_instructor');
    }
}
