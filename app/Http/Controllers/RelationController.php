<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Post, Comment};

class RelationController extends Controller
{
    public function getPostsList(Request $request)
    {
        $post = Post::find(1);
        $comments = $post->comments;
        dd($comments);
    }

    public function getCommentList(Request $request)
    {
        $comment = Comment::find(1);
        $post = $comment->post;
        dd($post);
    }

    public function store(Request $request)
    {
        $post = Post::find(1);
        $comment = new Comment;
        $comment->comment = "this is first commnet";
        $post = $post->comments()->save($comment);
    }

    public function commentPost(Request $request)
    {
        $post = Post::find(1);

        $comment1 = new Comment;
        $comment1->comment = "facebook status very frist";

        $comment2 = new Comment;
        $comment2->comment = "facebook status very frist slow";

        $post = $post->comments()->saveMany([$comment1, $comment2]);
    }


}
