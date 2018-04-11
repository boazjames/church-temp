<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    public function user(){
        return $this->belongsTo(User::Class);
    }
}
