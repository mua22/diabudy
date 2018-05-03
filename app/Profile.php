<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    use Mediable;
}
