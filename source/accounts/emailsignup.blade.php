@extends('_layouts.master')
@section('title', 'Sign up')

@section('body')
	<!-- Login form -->
	<div class="flex justify-center">
		<div class="w-1/4 bg-white p-4 border border-gray-300 mt-4">
			<div class="flex flex-col px-4 items-center">
				<img src="/assets/images/Instagram_logo-2x.svg" alt="Instagram logo" class="h-16">
				<p class="text-center font-bold opacity-50 px-3 py-2">Sign up to see photos and videos from your friends.</p>
				<button class="w-full font-semibold bg-insta-blue text-white rounded py-1 mt-2 text-sm flex justify-center items-center">
					<img src="/assets/images/facebook-logo-insta-colors.svg" class="w-4 mr-2" alt="facebook-logo">
					Log In with Facebook
				</button>
			</div>
			<div class="flex flex-col items-center">
				<div class="flex items-center mt-5">
					<div class="p-px bg-gray-200 w-24"></div>
					<h1 class="text-xs opacity-50 font-bold mx-4">OR</h1>
					<div class="h-px p-px bg-gray-200 w-24"></div>
				</div>
			</div>
			<form action="#" class="p-4 mb-1">
				<div class="mb-2">
					<input type="text" class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Mobile Number or Email">
				</div>
				<div class="mb-2">
					<input type="text" class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Full Name">
				</div>
				<div class="mb-2">
					<input type="text" class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Username">
				</div>
				<div class="mb-2">
					<input type="password" class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Password">
				</div>
				<div class="mt-3">
					<button class="w-full font-semibold bg-insta-blue text-white rounded py-1 text-sm">Sign up</button>
				</div>
			</form>
			<p class="px-8 mb-5 text-center text-sm opacity-50">By signing up, you agree to our <b>Terms</b>, <b>Data Policy</b> and <b>Cookies Policy</b>.</p>
		</div>
	</div>

	<!-- Register call -->
	<div class="flex justify-center">
		<div class="w-1/4 bg-white p-4 border border-gray-300 mt-4">
			<div class="flex flex-col items-center">
				<div class="flex items-center">
					<h1 class="text-sm mr-1">
						Have an account?
					</h1>
					<span>
						<a href="/accounts/login" class="text-sm text-insta-blue font-bold">Log in</a>
					</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Get the app -->
	<div class="flex flex-col items-center">
		<p class="text-sm my-4">Get the app.</p>
		<div class="flex items-center content-around">
			<a href="https://itunes.apple.com/app/instagram/id389801252">
				<img src="/assets/images/download-on-appstore.png" class="h-10 mr-1" alt="Download on App Store">
			</a>
			<a href="https://play.google.com/store/apps/details?id=com.instagram.android">
				<img src="/assets/images/get-it-on-google-play.png" class="h-10" alt="Get it on Google Play">
			</a>
		</div>
	</div>
@endsection
