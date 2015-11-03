<!doctype html>
<html>
<head>

    <title>
        @yield('title','P3 - Dynamic Web Applications')
    </title>

    <meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>

    {{-- For CSS or anything else in head --}}
    @yield('head')

</head>
<body>

    <header>

    </header>

    <section>

        {{-- Main Page Content will be yielded here --}}
        @yield('content')

    </section>

    <footer>
        &copy; Harvard Extension School - Dynamic Web Applications - {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
    
</body>
</html>
