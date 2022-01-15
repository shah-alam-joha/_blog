<footer class="mt-10" style="width: 100%; margin-top: 10px; background: black; color: white;" >
	<div class="row" style="padding-left: 80px; padding-top: 70px; align-content: center;">
		<div class="col-md-4">
			<h3 class="text-l sm:font-bold text-gray-100"> 
				Pages
			</h3>

			<ul class="py-4 sm:text-s pt-4 text-gray-400">
				<li class="pb-1">
					 <a class="nav-link" href="{{ route('index') }}">Home</a>
				 </li>
				 <li class="pb-1">
					  <a class="nav-link" href="{{ route('post') }}">All Blogs</a>
				 </li>
				 <li class="pb-1">
					 <a class="nav-link" href="{{ route('contact') }}">Contact</a>
				 </li>
				
			</ul>
		</div>

		<div class="col-md-4">
			<h3 class="text-l sm:font-bold text-gray-100"> 
				Contact
			</h3>

			<ul class="py-4 sm:text-s pt-4 text-gray-400">
				<li class="pb-1">
					
						Address: Mirpur,13 Dhaka-1216
					
				 </li>
				 <li class="pb-1">
					 Phone : 01748747564
				 </li>
				 <li class="pb-1">
					Email: shahalamjoha2017@gmail.com
				 </li>
				
			</ul>
		</div>

		<div class="col-md-4">
			<h3 class="text-l sm:font-bold text-gray-100"> 
				Most popuralr website
			</h3>

			<ul class="py-4 sm:text-s pt-4 text-gray-400">
				<li class="pb-1">
					<a href="{{ url('https://www.google.com/') }}">
						Google
					</a>
				 </li>
				 <li class="pb-1">
					<a href="{{ url('https://www.youtube.com/') }}">
						Youtube
					</a>
				 </li>
				 <li class="pb-1">
					<a href="{{ url('https://www.facebook.com/') }}">
						Facebook
					</a>
				 </li>
				 <li class="pb-1">
					<a href="{{ url('https://www.wikipedia.org/') }}">
						Wikipedia
					</a>
				 </li>
			</ul>
		</div>
		<hr>
		<div class="copy-right" style="text-align: center;">
			<p> Developed by &copy; joha , All rights are reserved </p>
		</div>
	</div>
</footer>