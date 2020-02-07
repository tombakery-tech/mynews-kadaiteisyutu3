<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
        
        // 以下を１８に追記
    // Profileモデルに関連付けを行う
    public function histories()
    {
      return $this->hasMany('App\ProfileHistory');

    }
}