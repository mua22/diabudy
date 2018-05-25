<?php

namespace App\Providers;

use App\Http\ViewComposers\CategoriesComposer;
use App\Http\ViewComposers\HeaderCategoriesComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('diabudy.home.categories',CategoriesComposer::class);
        View::composer('diabudy.pages.submit-article',CategoriesComposer::class);
        View::composer('diabudy.layouts._header',HeaderCategoriesComposer::class);
        View::composer('diabudy.layouts.master',HeaderCategoriesComposer::class);
        View::composer('polo.layouts.master',HeaderCategoriesComposer::class);
        View::composer('polo.home.categories',CategoriesComposer::class);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
