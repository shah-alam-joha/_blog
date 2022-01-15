@extends('pages.layouts.master')
@section('content')

<div class="backgroud-image grid grid-cols-1 m-auto">
	<div class="flex text-gray-100 pt-10">
		<div class="m-auto sm:m-auto w-80% block text-center" style="padding-top:200px;">
			<h2 class="sm:text-white text-5xl font-bold text-uppercase" style="color:white; padding-top: 50px;">Do you want to became a developer?</h2>
			<a href="" class="text-uppercase border border-warning" style="color:white;border-radius: 5px; margin-top: 5px; padding: 5px; text-decoration: none; background:gray;">Read More
				
			</a>
		</div>


	</div>
</div>
<div class="container">
<div class="widget">
	<div class="header" style="padding-left: 20px; font: bold; padding-top:10px; margin:15px 0px 10px 45px;">
		<h1 style="padding-bottom:30px;" >All Blogs </h1>
			<hr>
	</div>

@include('pages.post.layouts.all-post')

</div>

</div>
@endsection

