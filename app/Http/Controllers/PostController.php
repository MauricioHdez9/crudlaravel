<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts',compact('posts'));
    }
    public function addpost()
    {
            $post = new Post();
            $post->title=' 3 ?? primer titulo post';
            $post->body='3 listadescripcion del post';
            $post->save();
            return "se creo el post ";

    }
    public function addComment($id)
    {
            $post = Post::find($id);
            $commet = new Comment();
            $commet->comment =' el que vamos a ver comentario segundo del post';
            $post->comments()->save($commet);
            return "comment has been posted";

    }
    public function getcomments($id)
    {
        $comments =post::find($id)->comments;
        return $comments;


    }
}
