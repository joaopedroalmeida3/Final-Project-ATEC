<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_student');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
