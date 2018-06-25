<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\View;
use Intervention\Image\Exception\NotFoundException;
use Meta;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        Meta::set('title', "Web portal for diabetics");
        Meta::set('description', "Diabudy provides resources, tools and articles about diabetes. Sugar Level Record Keeping and diary management are two major contributions");
        $hide_sidebar = true;
        return view('polo.home',compact('hide_sidebar'));
    }

    public function category($slug)
    {

        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->where('published',1)->orderBy('created_at','DESC')->paginate(10);
        Meta::set('title', $category->title);
        Meta::set('description', $category->summary);
        return view('polo.home.category',compact('category','posts'));
    }
    public function post($slug)
    {
        $post = Post::where('slug',$slug)->first();
        Meta::set('title', $post->title);
        Meta::set('description', $post->content);
        return view('polo.home.post',compact('post'));
    }
    public function author($slug)
    {

        $user = User::where('slug',$slug)->first();
        $posts = $user->posts()->paginate(10);
        Meta::set('title', $user->name);
        Meta::set('description', "Articles by ".$user->name);
        return view('polo.home.user',compact('posts','user'));
    }
    public function tag($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        //return $tag;
        $posts = $tag->posts()->paginate(10);
        Meta::set('title', $tag->title);
        Meta::set('description', "Diabetes Related Tag: ".$tag->title);
        return view('polo.home.tag',compact('posts','tag'));
    }



    public function page($page)
    {
        if(View::exists("diabudy.pages.$page")){
            return view("diabudy.pages.$page");

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
