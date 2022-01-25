<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bgcolor">
    <div class="min-h-screen ">
        <div class="absolute px-12 space-y-3 py-80">
            <x-translatebutton/>
        </div>
       @yield('content')
    </div>
</body>
</html>
