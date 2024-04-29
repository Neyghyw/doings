<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Менеджер задач</title>
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <main>
        @section('Main')
        @endsection
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
