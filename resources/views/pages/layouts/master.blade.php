<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<!-- font awesome cdn link -->
  @include('partials.link') 
</head>

<body>
  <div class="wrapper">
   <!--  nav bar -->
   @include('partials.nav')
   @include('partials.messages')

{{-- main contend --}}
   @yield('content')


   @include('partials.footer')
 </div>

 

@include('partials.script')
</body>
</html>

