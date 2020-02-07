<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
     protected $guarded = array('id');
    //
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        );
        
    //17で追記
    // Newsモデルに関連付けを行う
    public function histories()
    {
      return $this->hasMany('App\History');

    }
}
