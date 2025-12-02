<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
        <!--el campo yield() nos servira para indicarle a .blade que no es codigo Html,
        sino una directiva que nosotros le estamos indicando. -->
</head>
<body>
    @include('layouts._partials.menu')
    @yield('body')
</body>
</html>

