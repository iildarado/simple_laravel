<!doctype html>
<html>
    <head>
        <title>Simple Laravel</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>
    <body>

        @include('layout.nav')
        
        @yield('content')

        @include('layout.footer')
        
    </body>
</html>