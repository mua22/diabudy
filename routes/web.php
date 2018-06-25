<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pusher', function () {
    //return 'coming soon';
    return view('pusher.pusher');
});
Route::get('pushertest', function () {
    event(new App\Events\UserCreated('Someone'));
    return "Event has been sent!";
});

Route::group(['middleware'=>['auth']],function (){
    Route::get('/category/{slug}/create', ['uses'=>'ArticlesController@create'])->name('frontend.category.create');
    Route::get('/category/{slug}/submit', 'ArticlesController@submit')->name('article.submit');
    Route::post('/category/{slug}/store', 'ArticlesController@store')->name('article.store');
    Route::patch('/posts/{id}/patch', 'ArticlesController@update')->name('article.update');
    Route::get('/posts/{id}/edit','ArticlesController@edit')->name('frontend.article.edit');
    Route::get('/my/articles','ArticlesController@index')->name('articles.index');
});
Route::get('tags/ajax','TagsController@ajax')->name('tags.ajax');
Route::get('/', 'HomePageController@index')->name('frontend');
Route::get('/category/{slug}', 'HomePageController@category')->name('frontend.category');

Route::get('/articles/{slug}', 'HomePageController@post')->name('frontend.post');
Route::get('/author/{name}', 'HomePageController@author')->name('frontend.author');
Route::get('/tags/{slug}', 'HomePageController@tag')->name('frontend.tag');
Route::get('/pages/{page}', 'HomePageController@page')->name('frontend.page');
Route::post('/search', 'HomePageController@submitSearch')->name('frontend.submitSearch');
Route::get('/search/{term}', 'HomePageController@search')->name('frontend.search');
Route::resource('tags','TagsController');

Auth::routes();
Route::group([ 'prefix' => 'my', 'namespace' => 'Dashboard','middleware'=>['auth']], function () {
    Route::get('/','DashboardController@index');
    Route::get('/profile','ProfilesController@index');
    Route::get('logbook','LogbookController@index')->name('logbook.index');
    Route::get('logbook/data','LogbookController@getIndexData')->name('logbook.data');
    Route::get('logbook/sugar/add','LogbookController@addSugar')->name('logbook.sugar.add');
    Route::post('logbook/sugar/store','LogbookController@storeSugarLevel')->name('logbook.sugar.store');
    Route::get('logbook/charts','LogbookController@charts')->name('logbook.charts');
    Route::get('logbook/charts/data','LogbookController@getDataForCharts')->name('logbook.charts.data');
    Route::get('logbook/{id}','LogbookController@destroy')->name('logbook.delete');
    Route::get('logbook/edit/{id}','LogbookController@editSugar')->name('logbook.edit');
    Route::post('logbook/edit/{id}','LogbookController@updateSugar')->name('logbook.sugar.update');
    Route::resource('diary','DiaryController');
    Route::get('diarydata','DiaryController@data')->name('diary.data');
});
//Route::get('/home', 'HomeController@index')->name('home');


//FaceBook Login Routes
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback')->name('login.facebook.callback');



Route::get('/cache-clear', function () {
    $exitCode = Artisan::call('cache:clear');

    //
});

Route::get('about-us','PagesController@about');
//Route::get('backend', 'Admin\DashboardController@index')->name('admin');
Route::group([ 'prefix' => 'backend', 'namespace' => 'Admin','middleware'=>['role:admin','auth']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/', 'DashboardController@index')->name('admin');
    Route::resource('users','UsersController');
    Route::resource('categories','CategoriesController');
    Route::resource('posts','PostsController');
    Route::get('posts-data','PostsController@data')->name('posts.data');
    Route::get('categories/up/{id}','CategoriesController@up')->name('categories.up');
    Route::get('categories/down/{id}','CategoriesController@down')->name('categories.down');
    Route::post('posts/approve','PostsController@approve')->name('posts.approve');
    Route::post('posts/unpublish','PostsController@unpublish')->name('posts.unpublish');
});