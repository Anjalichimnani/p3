<!doctype html>
<html>
<head>
    <title>Lorem Ipsum</title>
    <meta charset='utf-8'>
    <link href="/css/style.css" type='text/css' rel='stylesheet'>
</head>
<body>

    <header>

    </header>

    <section>
        <center>
            <h1>{{ $title }}</h1>
        </center>
    </section>

    <section>
        @foreach($paragraphs as $paragraph)
            <p>
                {{ $paragraph }}
            </p>
        @endforeach
    </section>



    <footer>
        &copy; Harvard Extension School - Dynamic Web Applications - {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>
