<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use  Intervention\Image\Facades\Image;
use Symfony\Component\Console\Input\Input;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       
        $row1 = Post::limit(2)->get();
        
        $row2 = Post::offset(2)->limit(3)->get();
        
        $row3 = Post::offset(5)->limit(3)->get();
        
        $row4 = Post::offset(8)->limit(1)->get();
        
        $row5 = Post::offset(9)->limit(2)->get();
        
        $row6 = Post::offset(11)->limit(2)->get();
        
        return view('mag.home', compact('row1','row2','row3','row4','row5','row6'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->get('name');
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, array(
            'title' => 'required|min:2',
            'body' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ));

        //Process the uploaded image
        $request->file('image')->move(public_path('storage/uploads'),
        $request->file('image')->getClientOriginalName());
        $request->image = 'storage/uploads/' . $request->file('image')->getClientOriginalName();
   
        //get the id of the category selected from the categories table
        $category_id = DB::table('categories')->where('name', $request->category)->get('id');

        //save post
        Auth::user()->post()->create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $category_id[0]->id,
            'publish_status' => false,
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image' => $request->image
        ]);


        return redirect()->route('addPost')->with('success', 'Post created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // $blogPost = DB::table('posts')->where('slug', $slug)->get();
      
        return view('mag.show', compact('blogPost'));
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
        $categories = Category::all();
        return view('posts.edit-post', compact('post', 'categories'));
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
        //validation
         if($request->image) {
             
            $this->validate($request, array(
                'title' => 'required|min:2',
                'body' => 'required',
                'category' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
            ));
    
            //Process the uploaded image
            $request->file('image')->move(public_path('storage/uploads'),
            $request->file('image')->getClientOriginalName());
            $request->image = 'storage/uploads/' . $request->file('image')->getClientOriginalName();
       
            //get the id of the category selected from the categories table
            $category = Category::where('name', $request->category)->first();
            $category_id = $category->id;

            //update post
            Auth::user()->post()->where("id", $id)->update([
                "title" => $request->title,
                "body" => $request->body,
                "category_id" => $category_id,
                "slug" => SlugService::createSlug(Post::class, 'slug', $request->title),
                "image" => $request->image,
            ]);

            return redirect()->route('allPosts')->with('success', 'Post updated successfully');

           
         }
         else{

            //Validate 
            $this->validate($request, array(
                'title' => 'required|min:2',
                'body' => 'required',
                'category' => 'required'
            ));
       
            //get the id of the category selected from the categories table
            $category = Category::where('name', $request->category)->first();
            $category_id = $category->id;

            //update post
            Auth::user()->post()->where("id", $id)->update([
                "title" => $request->title,
                "body" => $request->body,
                "category_id" => $category_id,
                "slug" => SlugService::createSlug(Post::class, 'slug', $request->title)
            ]);

            return redirect()->route('allPosts')->with('success', 'Post updated successfully');

           
         }
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('allPosts')->with('success', 'Post deleted successfully');
    }

    //Display all posts in a table in the all posts page
    public function getAll(){

        $allPosts = Post::all();
        return view('posts.all-posts', compact('allPosts'));
    }
}
