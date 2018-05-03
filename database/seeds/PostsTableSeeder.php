<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Category::all() as $category){
            $category->posts()->saveMany(factory('App\Post',10)->make());
        }
    }
}
