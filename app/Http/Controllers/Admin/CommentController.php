<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {

        $comments=Comment::where('approved',1)->latest()->paginate(20);

        return view('Admin.comments.all',compact('comments'));
    }


    public function unsuccessful()
    {
        $comments=Comment::where('approved',0)->latest()->paginate(20);

        return view('Admin.comments.approved',compact('comments'));
    }

    public function update(Request $request,Comment $comment)
    {
        $comment->update(['approved'=>1]);
        $comment->commentable->increment('commentCount');

        alert()->success('کامنت موردنطر تایید شد.','تایید شد');

        return back();
    }


    public function destroy(Comment $comment)
    {
        $comment->commentable->decrement('commentCount');
        $comment->delete();
        alert()->success('عملیات مورد نظر با موفقیت انجام شد.','حذف شد');
        return back();
    }
}
