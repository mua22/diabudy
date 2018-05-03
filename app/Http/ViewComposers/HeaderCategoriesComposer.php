<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 5/2/2018
 * Time: 5:15 PM
 */

namespace App\Http\ViewComposers;


use App\Category;
use App\Tag;
use Illuminate\View\View;

class HeaderCategoriesComposer
{
    public function compose(View $view)
    {
        $menuCategories = Category::getDefaultOrderCategories();
        $tags = Tag::getFrontPageTags();
        $view->with(compact('menuCategories','tags'));
    }
}