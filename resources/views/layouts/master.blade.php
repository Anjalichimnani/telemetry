<!doctype html>
<html>
<head>

    <title>
        @yield('title','P3 - Dynamic Web Applications')
    </title>

    <meta charset='utf-8'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link href="/css/style.css" type='text/css' rel='stylesheet'>

    {{-- For CSS or anything else in head --}}
    @yield('head')

</head>
<body>
	<?php include_once("analyticstracking.php") ?>

    <section>

        <center>
            <h1>@yield('topic')</h1>
        </center>

    </section>

    <section>
        {{-- Main Page Content will be yielded here --}}
        @yield('content')
    </section>

    <section>
        @yield('home')
    </section>

    <footer>
        &copy; Harvard Extension School - Dynamic Web Applications - {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
