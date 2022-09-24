<!DOCTYPE html>
<html lang="en">
<head>
@yield('meta')
@yield('styles')
</head>
    <body>
        @yield('header')
            <main>
            @yield('content')
            </main>
        @yield('footer')
        @yield('scripts')
    </body>
</html>