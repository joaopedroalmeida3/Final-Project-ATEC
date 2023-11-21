<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function vehicle ()
    {
        return $this->belongsTo(Vehicle::class);
    }
   
    public function category_student ()
    {
        return $this->belongsTo(Category_Student::class);
    }

    public function instructor ()
    {
        return $this->belongsTo(Instructor::class);
    }
}
