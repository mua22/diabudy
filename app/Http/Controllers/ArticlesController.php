<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Auth;
use Meta;
use MediaUploader;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $articles = $user->posts()->paginate(10);

        return view('polo.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $category = Category::where('slug',$slug)->first();

        return view('polo.articles.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($slug, Request $request)
    {
        //dd($_REQUEST);
        $category = Category::where('slug',$slug)->first();
        $user = Auth::user();
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->post_content;
        $post->summary = $request->post_summary;
        $post->author_id = $user->id;
        $post->category_id = $category->id;

        $post->save();
        $this->settags($post,$request);
        if(isset($request->submit_new))
            return redirect(route('article.submit',$post->id));
        return redirect(route('frontend.article.edit',$post->id));

    }

    private function settags($post,$request)
    {
        if($request->tags) {

            $tagIds = array();
            //return explode(',',$request->tags);
            foreach (explode(',', $request->tags) as $title) {
                array_push($tagIds, Tag::firstOrCreate(['title' => $title]));

            }
            $post->tags()->sync(array_map(function ($t) {
                return $t['id'];
            }, $tagIds));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        $post->submitted=0;
        $post->published=0;
        $post->save();
        Meta::set('title', "Edit: ".$post->title);
        return view('polo.articles.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::find($id);

//        if ($request->hasFile('post_image')) {
//            //dd($request->file('post_image'));
//            $media = MediaUploader::fromSource($request->file('post_image'))->toDestination('public','files')->upload();
//            dd($media);
//        }


        $post->title = $request->title;
        $post->content = $request->post_content;
        $post->summary = $request->post_summary;

           $post->save();
        $this->settags($post,$request);
        if(isset($request->submit_new))
            return redirect(route('article.submit',$post->id));
        return redirect(route('frontend.article.edit',$post->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function submit($id)
    {
        $post = Post::find($id);
        $post->submitted = 1;
        $post->save();
        return view('polo.articles.submitted',compact('post'));
    }


    public function publish_message()
    {
        
    }
}
