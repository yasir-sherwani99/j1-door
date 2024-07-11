<head>
    <meta charset="utf-8" />
    <title>J1 Door Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="J1 Door Company" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <!-- App CSS -->
    @vite('resources/css/app.css')
    @yield('style')
</head>