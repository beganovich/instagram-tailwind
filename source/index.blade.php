@extends('_layouts.master')
@section('body')

<div class="flex justify-center">
	<div class="w-1/2 mt-8 flex">
		<div class="w-1/2">
			<img src="/assets/images/homepage-smartphones.png" alt="Smartphone" class="mt-16">
		</div>


		<div class="w-1/2">
			<div class="bg-white p-4 border border-gray-300 mt-4">
				<div class="flex flex-col px-4 items-center">
					<img alt="Instagram logo" class="h-16" src="/assets/images/Instagram_logo-2x.svg">

					<p class="text-center font-bold opacity-50 px-3 py-2">Sign up to see photos and videos from your friends.</p>
					<button class="w-full font-semibold bg-insta-blue text-white rounded py-1 mt-2 text-sm flex justify-center items-center"><img alt="facebook-logo" class="w-4 mr-2" src="/assets/images/facebook-logo-insta-colors.svg"> Log In with Facebook</button>
				</div>


				<div class="flex flex-col items-center">
					<div class="flex items-center mt-5">
						<div class="p-px bg-gray-200 w-24">
						</div>


						<h1 class="text-xs opacity-50 font-bold mx-4">OR</h1>


						<div class="h-px p-px bg-gray-200 w-24">
						</div>
					</div>
				</div>


				<form action="#" class="p-4 mb-1">
					<div class="mb-2">
						<input class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Mobile Number or Email" type="text">
					</div>


					<div class="mb-2">
						<input class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Full Name" type="text">
					</div>


					<div class="mb-2">
						<input class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Username" type="text">
					</div>


					<div class="mb-2">
						<input class="bg-insta-gray p-2 rounded border border-gray-300 text-xs w-full" placeholder="Password" type="password">
					</div>


					<div class="mt-3">
						<button class="w-full font-semibold bg-insta-blue text-white rounded py-1 text-sm">Sign up</button>
					</div>
				</form>


				<p class="px-8 mb-5 text-center text-sm opacity-50">By signing up, you agree to our <b>Terms</b>, <b>Data Policy</b> and <b>Cookies Policy</b>.</p>
			</div>


			<div class="bg-white p-4 border border-gray-300 mt-4">
				<div class="flex flex-col items-center">
					<div class="flex items-center">
						<h1 class="text-sm mr-1">Have an account?</h1>
						<span><a class="text-sm text-insta-blue font-bold" href="/accounts/login">Log in</a></span>
					</div>
				</div>
			</div>


			<div class="flex flex-col items-center">
				<p class="text-sm my-4">Get the app.</p>


				<div class="flex items-center content-around">
					<a href="https://itunes.apple.com/app/instagram/id389801252"><img alt="Download on App Store" class="h-10 mr-1" src="/assets/images/download-on-appstore.png"></a> <a href="https://play.google.com/store/apps/details?id=com.instagram.android"><img alt="Get it on Google Play" class="h-10" src="/assets/images/get-it-on-google-play.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
