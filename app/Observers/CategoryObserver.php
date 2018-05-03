<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 4/15/2018
 * Time: 5:20 PM
 */

namespace App\Observers;


use App\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Events\Dispatcher;

class CategoryObserver
{

    public function saving(Category $model)
    {
        $slug = str_slug($model->title);
        $i=1;
        while(Category::where('slug',$slug)->first()!=null){
            $slug = $slug."-$i";
            $i++;
        }
        $model->slug = $slug;
    }



}