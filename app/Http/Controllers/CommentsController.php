<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        //validation
        $this->validate($request, array(
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ));
        $comment = new Comment();
        // dd($request->post_id);
        
        $comment->create([
            'author_firstName' => $request->firstname,
            'author_lastName' => $request->lastname,
            'email' => $request->email,
            'comment' => $request->comment,
            'likes' => 0,
            'approve_status' => 1,
            'post_id' => $request->post_id
        ]);

        return redirect()->back()->with('success', 'Comment posted successfully');

    }
}
