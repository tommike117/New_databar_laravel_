<!DOCTYPE html>
<html lang="en" itemtype="https://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes/header_old')
    @yield('link')
    
</head>
<body>
    @yield('content')

</body>
@yield('script')
</html>