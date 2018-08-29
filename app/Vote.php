<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property Vote totalVotes
 */
class Vote extends Model
{
    //
    public function answer(){
        return $this->belongsTo('App\Answer');
    }
}
