<!DOCTYPE HTML>
<html>
    <head>

        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @include('includes.head')
        @yield('css')

    </head>
    <body>

        @include('includes.header')

        @yield('content')

        @include('includes.footer')

        @yield('js')

    </body>
</html>