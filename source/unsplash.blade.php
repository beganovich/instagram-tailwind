@extends('_layouts.master')
@section('title', 'Unsplash (@unsplash)')

@section('body')
	<div class="flex mx-48 mt-12">
		<div class="w-1/3 flex justify-center">
			<img src="/assets/images/unsplash-profile-picture.jpg" class="rounded-full border h-40" alt="">
		</div>
		<div class="w-2/5">
			<div class="flex items-center">
				<div class="text-3xl">unsplash</div>
				<div class="mr-3 ml-5">
					<button class="bg-insta-blue text-white font-semibold py-1 text-sm px-6 rounded">Follow</button>
				</div>
				<div class="mr-3">
					<button class="p-2">
						<img src="/assets/images/more-horizontal.svg" alt="chevron-down" class="h-4">
					</button>
				</div>
			</div>
			<div class="flex items-center justify-between my-3">
				<div><b>5</b> posts</div>
				<div><b>247k</b> followers</div>
				<div><b>2,512</b> following</div>
			</div>
			<div class="flex flex-col mt-4">
				<div>
					<b>Unsplash</b>
				</div>
				<div>
					<p>Beautiful, free photos.</p>
					<p>Gifted by the world’s most generous community of photographers. 🎁</p>
				</div>
				<div class="mt-2">
					<a href="https://unsplash.com" class="font-bold text-blue-900">unsplash.com</a>
				</div>
				<div class="mt-2">
					<span class="text-xs opacity-50">Followed by @someone and and @someone2</span>
				</div>
			</div>
		</div>
	</div>

	<div class="flex mx-48 mt-12">
		<div class="bg-gray-200 opacity-50 w-full p-px"></div>
	</div>

	<div class="flex mx-48 items-center justify-center">
		<ul class="flex uppercase text-sm font-semibold opacity-75">
			<li class="mr-12">
				<a href="#" class="border-t pt-3 border-black flex items-center">
					<img src="/assets/images/grid.svg" alt="grid" class="h-3 mr-3">
					<span>Posts</span>
				</a>
			</li>
			<li>
				<a href="#" class="border-t pt-3 border-gray-200 opacity-50 flex items-center">
					<img src="/assets/images/users.svg" alt="grid" class="h-3 mr-3">
					<span>Tagged</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="flex flex-wrap overflow-hidden lg:-mx-4 lg:px-48">

	  <div class="w-full overflow-hidden lg:my-4 lg:px-4 lg:w-1/3 relative">
	    <img class="instagram-photo" src="https://picsum.photos/id/{{ mt_rand(1, 100) }}/300/300" alt="">
	  </div>

	  <div class="w-full overflow-hidden lg:my-4 lg:px-4 lg:w-1/3">
	    <img class="instagram-photo" src="https://picsum.photos/id/{{ mt_rand(1, 100) }}/300/300" alt="">
	  </div>

	  <div class="w-full overflow-hidden lg:my-4 lg:px-4 lg:w-1/3">
	    <img class="instagram-photo"  src="https://picsum.photos/id/{{ mt_rand(1, 100) }}/300/300" alt="">
	  </div>

	  <div class="w-full overflow-hidden lg:my-4 lg:px-4 lg:w-1/3">
	    <img class="instagram-photo" src="https://picsum.photos/id/{{ mt_rand(1, 100) }}/300/300" alt="">
	  </div>

	  <div class="w-full overflow-hidden lg:my-4 lg:px-4 lg:w-1/3">
	    <img class="instagram-photo" src="https://picsum.photos/id/{{ mt_rand(1, 100) }}/300/300" alt="">
	  </div>

	</div>

@stop
