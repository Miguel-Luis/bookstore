<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstore - @yield('title')</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
</head>
<body>
    <nav>
        <div class="nav-wrapper orange darken-1">
            <a href="#" class="brand-logo">Bookstore</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>
