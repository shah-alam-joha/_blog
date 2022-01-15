<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Image;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->simplePaginate(10);
        return view('pages.index', compact('posts'));
    }

    public function post()
    {
        $posts = Post::orderBy('id', 'desc')->simplePaginate(10);
        return view('pages.post.index',compact('posts'));
    }
    public function contact()
    {
       return view('pages.contact');
    } 

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
       return view('pages.post.show', compact('post'));
    }

}
