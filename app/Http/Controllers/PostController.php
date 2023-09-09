<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use App\Models\Video;
use App\Models\Comment;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){

        // $post = Post::find(1);
        // $post->update([
        //     'title' => 'Titre édité'
        // ]);

        // $post = Post::find(12);
        // $post->delete();


        // $posts = Post::orderBy('title')->get();
        // $video = Video::find(1);
        // dd($posts);

        // return view('articles', compact('posts', 'video'));

        return view('home');
    }

    public function create(){
        return view('form');
    }

    // public function show($id){

        
    //     $post = Post::findOrFail($id);

    //     // $post = Post::where('title', 'Fugite ipsa quasi ullam sed nulla.')->firstOrFail();

    //     // dd($post);
    //     // $posts = [
    //     //     1 => 'Mon titre n°1',
    //     //     2 => 'Mon titre n°2'
    //     // ];

    //     // $post = $posts[$id] ?? 'pas de titre';

    //     return view('article', [
    //         'post' => $post
    //     ]);
    // }

    // public function store(Request $request){

    //     // $post = new Post();
    //     // $post->title = $request->title;
    //     // $post->content = $request->content;
    //     // $post->save();
    //     // dd('Post créé ! ');

        
    //     $request->validate([
    //         'title' => ['required', 'min:5', 'max:255', 'unique:posts'], 
    //         'content' => 'required|min:5|max:255|unique:posts'
    //     ]);

    //     $filename = time() . '.' . $request->file('avatar')->extension();

    //     $path = $request->file('avatar')->storeAs(
    //         'avatars', $filename, 'public'
    //     );

    //     $post = Post::create([
    //         'title' => $request->title,
    //         'content' => $request->content,
    //     ]);

    //     $image = new Image;
        
    //     $image->path = $path;


    //     $post->image()->save($image);

    //     dd('post crée');




    // }

    public function contact(){
        return view('contact');
    }

    // public function register(){

    //     $post = Post::find(1);
    //     $video = Video::find(1);

    //     $post->comments()->saveMany([
    //         new Comment(['content' => 'A new comment.']),
    //         new Comment(['content' => 'Another new comment.']),
    //     ]);

    //     $comment3 = new Comment(['content' => 'Mon troisième commentaire']);

    //     $video->comments()->save($comment3);

    // }
}
