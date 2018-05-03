<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $fillable=['title'];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }

    public static function getFrontPageTags()
    {
        return Tag::where('frontpage',1)->get();
        
    }
}
