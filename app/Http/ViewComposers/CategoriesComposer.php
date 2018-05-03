<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 4/18/2018
 * Time: 8:03 AM
 */

namespace App\Http\ViewComposers;


use App\Category;
use Illuminate\View\View;

class CategoriesComposer
{
    public function compose(View $view)
    {
        $categories = Category::withDepth()->having('depth', '=', 0)->get();
        $view->with(compact('categories'));
    }
}