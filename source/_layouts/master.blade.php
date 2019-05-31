<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title') • Instagram</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon" />
    </head>
    <body class="bg-insta-gray">
        @yield('body')
        @unless(isset($hideFooter))
			@include('_partials.footer')
		@endunless
    </body>
</html>
