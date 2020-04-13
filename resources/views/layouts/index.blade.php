<!doctype html>
<html>
<head>
    <title>Sistema Acadêmico</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url("{{url('storage/images/background.jpg')}}");
            background-size: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center top;
        }
    </style>
</head>
<body>
@yield('layout')
</body>
</html>
