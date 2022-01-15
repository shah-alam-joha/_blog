@extends('pages.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
  	<div class="container">
    <div class="card form-padding">
      <div class="card-header">
      	<h3>
      		 Edit Blog
      	</h3>
       

      </div>
      <div class="card-body">

        <form action="{{ route('post.update', $post->slug) }}" method="post" enctype="multipart/form-data">
          @csrf
          


          @include('partials.messages')
          

          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control form-padding" id="exampleInputEmail1" name="title" value="{{ $post->title }}">
          </div>

          
          <div class="form-group">
            <label for="description">Body</label>
            <textarea name="body" rows="10" cols="30" class="form-control form-padding" placeholder="Enter post body/description">{{ $post->body }}"</textarea>
          </div>

         <div class="form-group" style="padding-top:20px;">
          <label for="oldImage">Post Old Image</label>
          <img src="{{ asset('images/post/'.$post->image) }}" width="50">
          <br><br>
          <label for="image">Post New Image (optional)</label>
          <input type="file" class="form-control form-padding" name="image" id="image" placeholder="Enter new image">
        </div> 
         
         <button type="submit" class="btn btn-primary form-padding">Update Post</button>

       </form>

     </div>
   </div>
   </div>
 </div>

</div>
</div>
<!-- main-panel ends -->
@endsection()