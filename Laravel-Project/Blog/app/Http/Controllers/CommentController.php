<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->article_id = $request->input('article_id');

        $comment->user_id = auth()->id();
        $comment->save();

        return back();
    }

    public function delete($id)
    {
        $comment = Comment::find($id);

        if( Gate::allows('comment-delete', $comment) ) {
            $comment->delete();
            return back();
        } else {
            return back()->with('error', 'Unauthorize');
        }
        // $comment->delete();

        // return back();
    }

    public function __construct()
    {
        $this->middleware("auth");
    }
}
