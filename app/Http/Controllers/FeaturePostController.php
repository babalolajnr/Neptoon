<?php

namespace App\Http\Controllers;

use App\FeaturedPost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeaturePostController extends Controller
{
    //feature incoming post
    public function featurePost($id){

        $request = new Request([
            'post_id' => $id
        ]);

        $this->validate($request, array(
            'post_id' => 'required|unique:featured_posts'
        ));

        Auth::user()->featuredPost()->create([
            'post_id' => $id
        ]);

        return redirect()->route('livePosts')->with('success', 'Post featured successfully');

    }
}
