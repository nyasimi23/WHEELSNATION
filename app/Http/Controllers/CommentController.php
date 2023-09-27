<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
// use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         // Validate the comment data
    $request->validate([
        'body' => 'required|min:3', // Add more validation rules as needed
    ]);

    // Create a new comment instance
    $comment = new Comment();

    // Check if the user is authenticated
    if (auth()->check()) {
        // If the user is authenticated, associate the comment with their user ID
        $comment->user_id = auth()->user()->id;
    }

    $comment->commentable_id = $request->input('commentable_id');
    $comment->commentable_type = $request->input('commentable_type');
    $comment->body = $request->input('body');
    $comment->save();

    // Redirect back with a success message or do something else
    return back()->with('success', 'Comment posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
