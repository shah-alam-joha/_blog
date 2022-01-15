@extends('pages.layouts.master')
@section('content')


	<div class="blog-style" style="padding-top:50px;">

		<div class="row" style="padding-bottom: 100px;">	
			<div class="col-md-6">
				<a href="">
					<img src="{{ asset('images/post/'.$post->image) }}" alt="{{ $post->title }}" style="width:100%; height: 500px;" >
				</a>
			</div>

			<div class="col-md-6" style="text-align:center;">

				<p> <h2>{{ $post->title }}</h2> </p>
				
				{{-- <p> <span class="">Written by &copy; <span style="color:red; font-style: italic; margin-top:-10px">{{$post->writer }}</span> ,Created on: {{ date('jS M Y', strtotime($post->updated_at)) }} </span></p> --}}

				<p  class="text-align:justity" style="text-align: center; text-align:justify; padding-bottom: 30px;">

					{{ $post->body}}
				</p>
				<p>
				

				{{-- @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id) --}}
				<p class="">
					<a class="btn btn-primary" href="{{ route('post.create') }}">Create Blog</a>
					<a class="btn btn-warning" href="{{ route('post.edit', $post->slug) }}">Edit Blog</a>

					<a class="btn btn-danger" href="{{ route('post.delete', $post->slug) }}">Delete Blog</a>
				</p>
				{{-- @endif --}}
	
				
			</div>
		</div>
		

	</div>
@endsection