<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Post extends Model
{
    use Sluggable;
    use CounterCache;
    protected $fillable = ['title','content','author_id','category_id'];

    // you can have more than one counter
    public $counterCacheOptions = [
        'Category' => [
            'field' => 'posts_count',
            'foreignKey' => 'category_id',
            'filter'=>'PublishedPostFilter'
        ]
    ];

    public function PublishedPostFilter()
    {
        return $this->published;
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function author()
    {
        return $this->belongsTo('App\User','author_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
