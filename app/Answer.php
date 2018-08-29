<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $table = 'answers';

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function vote(){
        return $this->hasMany('App\Vote','answerId');
    }
}
