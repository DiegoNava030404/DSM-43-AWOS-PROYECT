<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
    <link href="{{asset('css/bootstrap.css')}}"/>
    <link href="{{asset('css/app.css')}}"/>
    <script src="{{asset('js/jquery-3.7.1.js')}}"> </script>
    <script src="{{asset('js/bootstrap.js')}}"> </script>
<body>
    @yield('content')
    
</body>
</html>