<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //17で追記
    protected $guarded = array('id');

    public static $rules = array(
        'news_id' => 'required',
        'edited_at' => 'required',
    );
}
