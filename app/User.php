<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function readings()
    {
        return $this->hasMany('App\Reading');
    }
    public function charts()
    {
        return $this->hasMany('App\ChartsData', 'user_id');
    }
    public function categories()
    {
        return $this->hasMany('App\SugarCategory');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function posts()
    {
        return $this->hasMany('App\Post', 'author_id');
    }
    public function diary()
    {
        return $this->hasMany('App\Diary');
    }
    public function question()
    {
        return $this->hasMany('App\Question');
    }
    public function answer()
    {
        return $this->hasMany('App\Answer');
    }
}
