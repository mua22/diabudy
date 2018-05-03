<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\View;
use Intervention\Image\Exception\NotFoundException;
use Meta;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('diabudy.home');
    }

    public function category($slug)
    {

        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->where('published',1)->orderBy('created_at','DESC')->paginate(10);
        Meta::set('title', $category->title);
        Meta::set('description', $category->summary);
        return view('diabudy.home.category',compact('category','posts'));
    }
    public function post($slug)
    {
        $post = Post::where('slug',$slug)->first();
        Meta::set('title', $post->title);
        Meta::set('description', $post->content);
        return view('diabudy.home.post',compact('post'));
    }

    public function create($slug)
    {
        $category = Category::where('slug',$slug)->first();

        return view('diabudy.home.create',compact('category'));
    }

    public function page($page)
    {
        if(View::exists("diabudy.pages.$page")){
            return 'view Exists';

        }else {
            abort(404);
        }
    }

    public function submitSearch(Request $request)
    {
        return redirect(route('frontend.search',$request->term));
    }

    public function search($term)
    {
        $posts = Post::where('title','LIKE',"%$term%")->orWhere('content','LIKE',"%$term%")->paginate(10);
        return view('diabudy.home.search-results',compact('posts'));
    }
}
