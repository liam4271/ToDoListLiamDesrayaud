<!-- layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" >
    <title>@yield('titre')</title>
</head>

<body>
    <main class="contenu">
        @yield('content')
    </main>
</body>
</html>