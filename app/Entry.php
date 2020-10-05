<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public function getAccess(){
        return $this->belongsTo(Access::class,"access_id");
    }
}
