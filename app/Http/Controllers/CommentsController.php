<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;

class CommentsController extends Controller
{
    

    public function store(User $user)
    {
        Comment::create([
            'body' => request('body'),
            'user_id' => $user->id
        ]);

        return back();
    }

    public function destroy(Comment $comment)
    {
        $comment->exists();
        $comment->delete();

        return back();
    }
}
