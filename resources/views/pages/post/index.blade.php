@extends('pages.layouts.master')
@section('content')

<div class="widget">
	<div class="container">
		<div class="header" style="padding-left: 20px; font: bold; padding-top:10px; margin:15px 0px 10px 45px;">
			<h1 style="padding-bottom:30px;" >All Blogs </h1>
			<hr>
		</div>


		@if (Auth::check())
		<div>
			<a href="{{ route('post.create') }}" style="text-decoration: none;">
				<p> <span style="background-color: blue; margin:20px 0px 10px 50px; border-radius: 5px; padding: 10px; color: white; text-decoration: none;">Create New Post</span> </p> 
			</a>
		</div>
		@endif
		

		@include('pages.post.layouts.all-post')

	</div>
</div>

@endsection