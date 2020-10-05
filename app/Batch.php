<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{

    public function getCourse()
    {
        return $this->belongsTo('App\Course',"course_id");
    }
    public function getAdmin(){
        return $this->belongsTo("App\User","user_id");
    }
}
