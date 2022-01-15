@extends('pages.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
  	<div class="container">
    <div class="card form-padding">
      <div class="card-header">
      	<h3>
      		 Add A new Blog
      	</h3>
       

      </div>
      <div class="card-body">

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
          @csrf

          @include('partials.messages')
          

          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control form-padding" id="exampleInputEmail1" name="title" placeholder="Enter post title">
          </div>

          
          <div class="form-group">
            <label for="description">Body</label>
            <textarea name="body" rows="30" cols="30" class="form-control form-padding" placeholder="Enter post body/description"></textarea>
          </div>

         <div class="form-group">
          <label for="image">Post Image</label>
          <input type="file" class="form-control form-padding" name="image" id="image" placeholder="Enter post image">
        </div> 
         
         <button type="submit" class="btn btn-primary form-padding">Add Post</button>

       </form>

     </div>
   </div>
   </div>
 </div>

</div>
</div>
<!-- main-panel ends -->
@endsection()