<html>
    <head>
    </head>
    <title> Laravel Practice</title>
    <body>
        @if(Session::has('global'))
        <p>{{Session::get('global')}}</p>
        @endif
        @include('layout.navigation')
        @yield('content')
    </body>
</html>