<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id; 
        $user_posts = Post::where('user_id', $user_id)->get();
        $user_posts_count = $user_posts->count();
        // dd($user_posts_count);
        
        return view('profile.profile', compact('user_posts_count'));  
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
    public function update(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $this->validate($request, array(
            'firstName' => 'required|min:2|string',
            'lastName' => 'required|min:2|string',
            'username' => 'required|min:2',
            'email' => 'required|email',
            'location' => 'required|min:2',
            'bio' => 'required|min:2',
            'skills' => 'required|min:2',
            'headline' => 'required|min:2',
            'experience' => 'required|min:2'
        ));

        //update post
        Auth::user()->where("id", $user_id)->update([
            'firstName' => $request->firstName,
            'lastName' =>  $request->lastName,
            'username' =>  $request->username,
            'email' =>  $request->email,
            'location' =>  $request->location,
            'bio' =>  $request->bio,
            'skills' =>  $request->skills,
            'headline' =>  $request->headline,
            'experience' =>  $request->experience
        ]);

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
        
    }

    //update profile image
    public function updateAvatar(Request $request)
    {
        $user_id = Auth::user()->id;

        $this->validate($request, array(
            'avatar' => 'required|image|mimes:jpeg,png,jpg'
        ));

        //Process the uploaded image
        // $request->file('avatar')->move(public_path('storage/avatar'),
        // $request->file('avatar')->getClientOriginalName());
        // $request->avatar = 'storage/avatar/' . $request->file('avatar')->getClientOriginalName();

        // Process the image and resize to 750x450
        $request->avatar = 'storage/uploads/' . $request->file('avatar')->getClientOriginalName();
        $avatar = Image::make($request->file('avatar')->getRealPath())->fit(128,128);
        $avatar->save($request->avatar); 
        

        Auth::user()->where("id", $user_id)->update([
            'avatar' => $request->avatar
        ]);

        return redirect()->route('profile')->with('success', 'Profile image updated successfully');
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
