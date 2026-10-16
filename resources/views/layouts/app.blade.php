<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mie Ayam & Pangsit Gemoy</title>
    <link href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<style>
    .bg-pink {
        background-color: #e8738a !important;
    }
    .btn-pink {
        background-color: #e8738a !important;
        border-color: #e8738a !important;
        color: #ffffff !important;
    }
    .btn-pink:hover {
        background-color: #d85f77 !important;
        border-color: #d85f77 !important;
        color: #ffffff !important;
    }
</style>
<body class="bg-light d-flex flex-column min-vh-100">
    <header>
        @include('partials.header')
    </header>
    <main class="flex-grow-1">
        @yield('content')
    </main>
    @include('partials.footer')
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>