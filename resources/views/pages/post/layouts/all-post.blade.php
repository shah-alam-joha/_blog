@foreach($posts as $post)

<div class="blog-style" style="padding-top:50px;">

	<div class="row" style="padding-bottom: 100px;">	
		<div class="col-md-6">
			<a href="">
				<img src="{{ asset('images/post/'.$post->image) }}" alt="{{ $post->title }}" style="height: 300px; width:100%;" >
			</a>
		</div>

		<div class="col-md-6" style="text-align:center;">

			<p> <h2>{{ $post->title }}</h2> </p>

			{{-- <p> <span class="">Written by &copy; <span style="color:red; font-style: italic; margin-top:-10px">{{$post->writer }}</span> ,Created on: {{ date('jS M Y', strtotime($post->updated_at)) }} </span></p> --}}

			<p  class="text-align:justity" style="text-align: center; text-align:justify;">

				{{ $post->body}}
			</p>
			<p> <a class="btn btn-info text-uppercase" href="{{ route('post.show', $post->slug) }}" style="width:200px; height: 50px; margin-top: 20px ; text-decoration: none;">Read More</a>



				{{-- @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id) --}}
				<p class="">
					<a class="btn btn-primary" href="{{ route('post.create') }}">Create New Blog</a>
					<a class="btn btn-warning" href="{{ route('post.edit', $post->slug) }}">Edit This Blog</a>

					<form action="{{ route('post.delete', $post->slug) }}" method="post">

						@csrf

						<button type="submit" class="btn btn-danger">Delete This Blog</button>
					</form>
				</p>
				{{-- @endif --}}


			</div>
		</div>


	</div>

	<hr>
	@endforeach

	<div class="mt-4 pagination text-center">
		{{ $posts->links() }}
	</div>