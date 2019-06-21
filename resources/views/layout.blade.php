<!DOCTYPE html>
<html lang="en">
<head>
   <title>@yield('title', 'Laracasts')</title>
</head>
<body>
   @yield('content')

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Conact Us</a></li>
    </ul>
</body>
</html>