<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

use Image; 
use File;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('pages.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable | image',
            'body' => 'required',
            // 'user_id' => 'required',
            
        ],
        [
            'title.required' => 'Please provide a title of this blog!',
            'image.image' => 'Please provide a valid image with extension .jpg/ .png ',
            'body.required' => 'Please provide a description or blog body information',
            // 'user_id.required' =>'Please login first',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = Str::slug($post->id. '-' .$request->title);
        // $post->user_id = auth()->user()->id;

        
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $img = time() . '.' .$image->getClientOriginalExtension();
            $location = 'images/post/' .$img;
            Image::make($image)->save($location);
            $post->image = $img;
        }


        $post->save();

        session ()->flash('success', 'A new post has added successfully ..!!');
        return redirect()->route('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->get();
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
     $post = Post::where('slug', $slug)->first();
     return view('pages.post.edit', compact('post'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
       $this->validate($request, [
        'title' => 'required|nullable',
        'image' => 'nullable | image',
        'body' => 'required|nullable',
            // 'user_id' => 'required',

    ],
    [
        'title.required' => 'Please provide a title of this blog!',
        'image.image' => 'Please provide a valid image with extension .jpg/ .png ',
        'body.required' => 'Please provide a description or blog body information',
            // 'user_id.required' =>'Please login first',
    ]);

       $post = Post::where('slug', $slug)->first();
       $post->title = $request->title;
       $post->slug = $request->slug;
       $post->body = $request->body;

               //insert image also

       if ( $request->hasFile('image')) {
        //delete the old image from file

        if ( File::exists( 'images/post/' .$post->image)) {
         File::delete( 'images/post/' .$post->image);
     }

     $image = $request->file('image');
     $img = time() . '.' .$image->getClientOriginalExtension();
     $location = 'images/post/' .$img;
     Image::make($image)->save($location);
     $post->image = $img;
 }

 $post->save();

 session()->flash('success', 'Post has been updated successfully!');
 return redirect()->route('post');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function delete($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if (!is_null($post)) {

            //delete image also
            if (File::exists('images/post/'.$post->image)) {
               File::delete('images/post/'.$post->image);
           }
           $post->delete();

           
       }
       session()->flash('success', 'Post has been deleted successfully!');
       return redirect()->route('post');
   }
}
