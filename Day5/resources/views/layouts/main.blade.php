<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('/css/styles.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <!-- Responsive navbar-->
    <header>
        @include('layouts.header')
    </header>










    @yield('content')










    <!-- Footer-->
    <footer class="py-5 bg-dark">
        @include('layouts.footer')
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('/js/scripts.js') }}"></script>
</body>

</html>
