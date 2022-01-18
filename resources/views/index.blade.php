{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Muhammad Rayhan Hamada Budiman</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <h1>Setup Laravel Bootstrap Successfully <i class="fab fa-adversal"></i></h1>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html> --}}

<html>

<head>
    @include('includes.head')
</head>

<body style="background-color: #404040;">
    <div class="wrap">
        <div id="main" class="row">
            <div class="col-md-12">
                @include('pages.navbar')
                @include('pages.header')
                @include('pages.me')
                @include('pages.experience')
                @include('pages.portofolio')

            </div>
        </div>
    </div>
    @include('includes.footer')
</body>

</html>
