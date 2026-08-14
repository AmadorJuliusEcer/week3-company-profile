<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Veyrion - Building smarter digital experiences for modern businesses.">

    <title>@yield('title', 'Veyrion | Digital Solutions')</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- Navigation -->
    @include('components.navbar')


    <!-- Page Content -->
    <main>

        @yield('content')

    </main>


    <!-- Footer -->
    @include('components.footer')

</body>

</html>