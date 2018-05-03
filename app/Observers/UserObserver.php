<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 3/10/2018
 * Time: 8:51 AM
 */

namespace App\Observers;


use App\SugarCategory;
use App\User;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->categories()->saveMany(UserObserver::defaultSugarCategories());

    }

    public static function defaultSugarCategories()
    {
        $category = new SugarCategory();
        $category->title = 'Random';
        $categories[0] = $category;

        $category = new SugarCategory();
        $category->title = 'Before BreakFast';
        $categories[1] = $category;
        $category = new SugarCategory();
        $category->title = 'Random';
        $categories[2] = $category;

        $category = new SugarCategory();
        $category->title = 'After BreakFast';
        $categories[3] = $category;
        $category = new SugarCategory();
        $category->title = 'Before Lunch';
        $categories[4] = $category;

        $category = new SugarCategory();
        $category->title = 'After Lunch';
        $categories[5] = $category;
        $category = new SugarCategory();
        $category->title = 'Before Dinner';
        $categories[6] = $category;

        $category = new SugarCategory();
        $category->title = 'After Dinner';
        $categories[7] = $category;

        return $categories;
    }
}