<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS MATERIALIZE CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">
    @yield('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body>
    <nav class="navigation">
        <div class="nav-wrapper container">
            <a href="#!" class="brand-logo">Click<b class="orange-text">View</b></a>
            <ul class="right hide-on-med-and-down">
                <li><a href={{ route('contact') }}>Contact</a></li>
                <li><a href={{ route('contact.list') }}>Customers List</a></li>
            </ul>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="fa fa-bars orange-text" aria-hidden="true"></i></a>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
        <li><a href={{ route('contact') }}>Contact</a></li>
        <li><a href={{ route('contact.list') }}>Customers List</a></li>
    </ul>

    @yield('content')

    @yield('bottom-js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = window.M.Sidenav.init(elems);
        });
    </script>
</body>

</html>