<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::withDepth()->defaultOrder()->get();
        return view('admin.posts.index',compact('categories'));
    }

    public function data(Request $request)
    {

        $posts = Post::query();
        if($request->has('category')){

            if($request->input('category')!='all'){
                //dd($request->input('category'));
                $posts->where('category_id',$request->input('category'));

            }
        }
        if($request->has('search')){
                $posts->where('title','LIKE','%'.$request->input('search').'%');

        }
        if($request->has('status')){
            if($request->input('status')!='all')
            {
                if($request->input('status')=='submitted')
                    $posts->where('submitted',1);
                if($request->input('status')=='published')
                    $posts->where('published',1);
            }

        }
//        dd($posts->toSql());
        $posts = $posts->paginate(5);

        return view('admin.posts.data',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::withDepth()->defaultOrder()->get();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
    }

    public function approve(Request $request)
    {
     $post = Post::find($request->id);
     $post->approve();
     return view('admin.posts.data_row',compact('post'));
    }
    public function unpublish(Request $request)
    {
     $post = Post::find($request->id);
     $post->unpublish();
     return view('admin.posts.data_row',compact('post'));
    }
}
