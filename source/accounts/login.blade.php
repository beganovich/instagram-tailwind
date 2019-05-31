@extends('_layouts.master')
@section('title', 'Login')

@section('body')
	<!-- Login form -->
	<div class="flex justify-center">
		<div class="w-1/4 bg-white p-4 border border-gray-300 mt-4">
			<div class="flex justify-center">
				<img src="/assets/images/Instagram_logo-2x.svg" alt="Instagram logo" class="h-16">
			</div>
			<form action="#" class="p-4 mt-4 mb-1">
				<div class="mb-2">
					<input type="text" class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Phone number, username, or email">
				</div>
				<div class="mb-2">
					<input type="password" class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Password">
				</div>
				<div class="my-4 flex justify-end">
					<a href="#" class="text-blue-900 text-sm">Forgot password?</a>
				</div>
				<div class="mt-5">
					<button class="w-full font-semibold bg-insta-blue text-white rounded py-1 text-sm">Log In</button>
				</div>
			</form>
			<div class="flex flex-col items-center">
				<div class="flex items-center mt-2">
					<div class="p-px bg-gray-200 w-24"></div>
					<h1 class="text-xs opacity-50 font-bold mx-4">OR</h1>
					<div class="h-px p-px bg-gray-200 w-24"></div>
				</div>
				<div class="flex items-center">
					<img src="/assets/images/facebook-logo.svg" alt="Facebook logo" class="w-4 h-4 mr-3">
					<a href="#" class="my-8 text-sm font-bold text-blue-800">Log in with Facebook</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Register call -->
	<div class="flex justify-center">
		<div class="w-1/4 bg-white p-4 border border-gray-300 mt-4">
			<div class="flex flex-col items-center">
				<div class="flex items-center">
					<h1 class="text-sm mr-1">
						Don't have an account?
					</h1>
					<span>
						<a href="/accounts/emailsignup" class="text-sm text-insta-blue font-bold">Sign up</a>
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
