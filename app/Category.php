<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Cache;
use Kalnoy\Nestedset\NodeTrait;
//use Plank\Mediable\Mediable;

class Category extends Model
{
    protected $fillable = ['title','description','parent_id'];
    use NodeTrait;
    //use Mediable;
    //use Sluggable;

    /**
     * used for slugging
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getTreeTitleAttribute()
    {
        $depth = 0;
        if(isset($this->attributes['depth']))
        $depth = $this->attributes['depth'];
        $treeTitle = $this->attributes['title'];
        for($i=0;$i<$depth;$i++){
            $treeTitle = "|-- ".$treeTitle;
        }
        return $treeTitle;
    }
    protected $appends = ['tree_title'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public static function getDefaultOrderCategories()
    {
        /*$categories  = Cache::remember('categories', 300, function() {
            return Category::withDepth()->defaultOrder()->get();
        });*/
        $categories = Category::all()->toTree();
        return $categories;
    }

    public static function forgetCategoriesCache()
    {
        Cache::forget('categories');
    }
}
