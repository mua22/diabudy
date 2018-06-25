<?php

use Illuminate\Database\Seeder;
use App\Post;

class addTagsToPosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Post::all() as $post)
        $post->tags()->sync($this->UniqueRandomNumbersWithinRange(1,15,rand(2,7)));
    }
    private function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
}
