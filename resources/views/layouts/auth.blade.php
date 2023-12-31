<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- Meta data -->
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ config('app.name') }}</title>

		@if(isset($information['google_analytics_code']))
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{$information['google_analytics_code']}}"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '{{$information['google_analytics_code']}}');
		</script>
		@endif

		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<meta name="stream-url" content="{{ $streamUrl??route('user.dashboard') }}">

		<link rel="icon" type="image/x-icon" href="{{asset(site()['favicons'])}}">

		<title>{{$information['site_name']}} | @yield('title')</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@500;600;700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="{{ asset('css/mr_wrapper.css') }}">
		<link href="/assets/css/fonts.css" rel="stylesheet">
		<!-- CSS files -->
		<link href="/assets/css/tabler.min.css" rel="stylesheet"/>
		<link href="/assets/css/tabler-flags.min.css" rel="stylesheet"/>
		<link href="/assets/css/tabler-payments.min.css" rel="stylesheet"/>
		<link href="/assets/css/tabler-vendors.min.css" rel="stylesheet"/>
		<link href="/assets/css/demo.min.css" rel="stylesheet"/>
		<link href="/assets/css/toastr.min.css" rel="stylesheet"/>
		@yield('additional_css')
		@stack('css')
		<link href="/assets/css/magic-ai.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
		@vite('resources/css/app.css')
		@if($information['dashboard_code_before_head'] != null)
			{!!$information['dashboard_code_before_head']!!}
		@endif
	</head>

	<body class="app sidebar-mini">

		<!-- Page -->
		<div class="page">
			<div class="page-main">

				<!-- App-Content -->
				<div class="main-content">
					<div class="side-app">

						@yield('content')

					</div>
				</div>

		</div><!-- End Page -->

        @include('auth.script')

		{{-- @include('layouts.footer-frontend') --}}

	</body>
</html>


