<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function getBatch()
    {
        return $this->belongsTo('App\Batch',"batch_id");
    }
}
