<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamzid's Blog</title>
    @vite('resources/css/app.css')
</head>

<body>

    @include('components.navbar')
    <div class="content-div">
        @yield('content')
    </div>
    @include('components.footer')


</body>

</html>
