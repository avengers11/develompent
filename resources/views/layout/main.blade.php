@props(['title' => config('app.name'), 'setting'])

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?: config('app.name') }}</title>

    <link rel="icon" type="image/x-icon" href="{{asset(site()['favicons'])}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800&display=swap" rel="stylesheet" />

    {{-- owl carousel --}}
    <link rel="stylesheet" href="{{ asset('/css/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mr_wrapper.css') }}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- Styles -->
    @vite(['resources/css/site.css'])
</head>

<body>
    {{ $slot }}
</body>

</html>
