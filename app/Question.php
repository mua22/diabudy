<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public $table = 'questions';

    protected function answers()
    {
        return $this->hasMany('App\Answer','question_id');
    }
    protected function user()
    {
        return $this->belongsTo('App\User');
    }
}
