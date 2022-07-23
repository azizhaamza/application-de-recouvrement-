
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/light-bootstrap/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('assets/light-bootstrap/img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{ $title }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="{{ asset('assets/css/bootstrap1.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/light-bootstrap-dashboard1.css?v=2.0.0') }} " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('assets/css/demo1.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper @if (!auth()->check() || request()->route()->getName() == "") wrapper-full-page @endif">

            @if (auth()->check() && request()->route()->getName() != "")
                @include('layoutsresponsable.navbars.sidebar')
            @endif

            <div class="@if (auth()->check() && request()->route()->getName() != "") main-panel @endif">
                @include('layoutsresponsable.navbars.navbar')
                @yield('content')
                @include('layoutsresponsable.footer.nav')
            </div>

        </div>
       


    </body>
        <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min1.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min1.js') }}" type="text/javascript"></script>
    
    
</html>