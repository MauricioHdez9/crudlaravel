<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addpost()
    {
            $post = new Post();
            $post->title='2primer titulo post';
            $post->body='2descripcion del post';
            $post->save();
            return "se creo el post ";

    }
    public function addComment($id)
    {
            $post = Post::find($id);
            $commet = new Comment();
            $commet->comment ='comentario segundo del post';
            $post->comments()->save($commet);
            return "comment has been posted";

    }
    public function getcomments($id)
    {
        $comments =post::find($id)->comments;
        return $comments;


    }
}
