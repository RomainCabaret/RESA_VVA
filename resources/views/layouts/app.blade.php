<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,500;1,9..40,500&family=Inter:wght@700&display=swap"
        rel="stylesheet">
    <title>RESA-VVA</title>
    {{-- @vite(['resources/scss/app.scss', 'resources/js/app.js']) --}}

    @vite(['resources/css/app.css'])

</head>

<body>
    @include('partials.navbar')
    @yield('content')
</body>

</html>
