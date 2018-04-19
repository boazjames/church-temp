<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
public static function message(){
    return static::where('is_read','=','0')->latest()->get();
}
}
