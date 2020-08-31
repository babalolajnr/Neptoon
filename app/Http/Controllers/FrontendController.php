<?php

namespace App\Http\Controllers;

use App\Comment;
use App\FeaturedPost;
use App\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $featuredPosts = FeaturedPost::latest()->limit(2)->get();
        $recentPosts1 = Post::where('publish_status', 1)
                        ->orderBy('published_at', 'desc')->limit(3)->get();
        $recentPosts2 = Post::where('publish_status', 1)
                        ->orderBy('published_at', 'desc')->offset(3)->limit(3)->get();
        $recentPosts3 = Post::where('publish_status', 1)
                        ->orderBy('published_at', 'desc')->offset(6)->limit(1)->get();
        $recentPosts4 = Post::where('publish_status', 1)
                        ->orderBy('published_at', 'desc')->offset(7)->limit(2)->get();
        $recentPosts5 = Post::where('publish_status', 1)
                        ->orderBy('published_at', 'desc')->offset(9)->limit(2)->get();
        $recentPosts6 = Post::where('publish_status', 1)
                        ->orderBy('published_at', 'desc')->offset(11)->limit(2)->get();
        
        return view("front-end.index", 
                    compact('featuredPosts', 'recentPosts1', 
                            'recentPosts2', 'recentPosts3', 
                            'recentPosts4', 'recentPosts5', 'recentPosts6'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($slug)
    { 
        // $post = Post::find($slug);
        $post = Post::where('slug', $slug)->first();

        // get post views and update
        $postViews = $post->views;
        $postViews++;
        Post::where('slug', $slug)->update([
            'views' => $postViews
        ]);
         
        $comment = Comment::where('post_id', $post->id)->get();
        return view('front-end.single-post', compact('post', 'comment'));
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
        //
    }
}
