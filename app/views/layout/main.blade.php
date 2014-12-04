<html>
    <head>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    </head>
    <title> Laravel Practice</title>
    <body>
        {{ HTML::style('css/main.css') }}
        @if(Session::has('global'))
        <p>{{Session::get('global')}}</p>
        @endif
        @include('layout.navigation')
        @yield('content')
    </body>
</html>