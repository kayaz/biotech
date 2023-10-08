<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.min.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @stack('style')
</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}">
{!! settings()->get("scripts_afterbody") !!}
@include('layouts.partials.header')

@yield('content')

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

@auth
    @include('layouts.partials.inline')
@endauth

<script>
    const scene = document.getElementById('hexparalaxa');
    const parallaxInstance = new Parallax(scene);

    $(".gallery-content ul").responsiveSlides({auto:true, pager:false, nav:true, timeout:5000, random:false, speed: 500});
</script>

@stack('scripts')

{!! settings()->get("scripts_beforebody") !!}

</body>
</html>
