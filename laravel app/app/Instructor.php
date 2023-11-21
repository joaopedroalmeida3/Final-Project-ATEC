<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    public function categories ()
    {
        return $this->belongsToMany(Category::class,'category_instructor');
    }

    public function lessons ()
    {
        return $this->hasMany(Category_Student_Vehicle::class);
    }
}
