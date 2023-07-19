<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamzid's Blog</title>
    @vite('resources/css/app.css')
    <script src="{{asset('js/axios.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('build/assets/app-b787a5d1.css') }}">
</head>

<body class="box-border">

    @include('components.navbar')
    <div class="content-div">
        @yield('content')
    </div>
    @include('components.footer')

{{-- <script src="{{ asset('build/assets/app-0d91dc04.js') }}"></script> --}}
</body>

</html>
