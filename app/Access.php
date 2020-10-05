<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    public function getStudent(){
        return $this->belongsTo("App\User","user_id");
    }
    public function getBatch(){
        return $this->belongsTo("App\Batch","batch_id");
    }
}
