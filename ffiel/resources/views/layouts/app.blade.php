<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>FFIEL</title>
    @include('layouts.generals.headers')
    <script src="{{ asset('css/semantic/dist/semantic.min.js') }}"></script>

</head>
<body>
@yield('nav')
<!-- Page Contents -->
@yield('gallery')
<div class="container">
    @yield('content')
</div>
    @include('layouts.generals.scripts')
</body>

</html>