<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function getAdmin(){
        return $this->belongsTo("App\User","user_id");
    }
    public function getBatch(){
        return $this->hasMany(Batch::class,"course_id");
    }
}
