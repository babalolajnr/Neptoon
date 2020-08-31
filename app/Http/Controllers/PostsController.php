<?php

namespace App\Http\Controllers;

use App\Category;
use App\FeaturedPost;
use App\Post;
use App\User;
use Carbon\Carbon;
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

    //Show all the posts on the front-end template
    public function index()
    {
        //
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
            'body' => 'required|min: 100',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ));

        //Process the uploaded image without resizing the image
        // $request->file('image')->move(public_path('storage/uploads'),
        // $request->file('image')->getClientOriginalName());
        // $request->image = 'storage/uploads/' . $request->file('image')->getClientOriginalName();

        // Process the image and resize to 750x450
        $request->image = 'storage/uploads/' . $request->file('image')->getClientOriginalName();
        $image = Image::make($request->file('image')->getRealPath())->fit(750,450);
        $image->save($request->image); 
   
        //get the id of the category selected from the categories table
        $category_id = DB::table('categories')->where('name', $request->category)->get('id');

        //save post
        Auth::user()->post()->create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $category_id[0]->id,
            'publish_status' => false,
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            // 'image' => $request->image
            'image' => $request->image
        ]);


        return redirect()->route('drafts')->with('success', 'Post drafted successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blogPost = Post::where('slug', $slug)->get();
      
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
      
        // $post = Post::find($id);
        //validation
         if($request->image) {
             
            $this->validate($request, array(
                'title' => 'required|min:2',
                'body' => 'required',
                'category' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
            ));
    
            //Process the uploaded image
            // $request->file('image')->move(public_path('storage/uploads'),
            // $request->file('image')->getClientOriginalName());
            // $request->image = 'storage/uploads/' . $request->file('image')->getClientOriginalName();

            // Process the image and resize to 750x450
            $request->image = 'storage/uploads/' . $request->file('image')->getClientOriginalName();
            $image = Image::make($request->file('image')->getRealPath())->fit(750,450);
            $image->save($request->image); 
       
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

            return redirect('/posts/edit/'.$id)->with('success', 'Post "'.$request->title.'" updated successfully');

           
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

            return redirect('/posts/edit/'.$id)->with('success', 'Post "'.$request->title.'" updated successfully');

           
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

        return redirect()->back()->with('success', 'Post deleted successfully');
    }

    //Display all drafts
    public function drafts() {
        $drafts = Post::where('publish_status', 0)->get();
        return view ('posts.drafts', compact('drafts'));
    }

    //Publish Posts
    public function publish($id) {
      
        $published = Carbon::now();
        $published = $published->toDateTimeString();

        Auth::user()->post()->where("id", $id)->update([
            "publish_status" => 1,
            "published_at" => $published
        ]);

        return redirect()->back()->with('success', 'Post published successfully');
    }

    //Display Live Posts
    public  function getLivePosts() {
        $livePosts = Post::where('publish_status', 1)->orderBy('published_at', 'desc')->get();
        $featuredPosts = FeaturedPost::all();
        return view ('posts.live-posts', compact('livePosts','featuredPosts'));
    }
}
