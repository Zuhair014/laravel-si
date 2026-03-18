<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $data['title'] }}</title>
</head>
<body>
    <h4>ini bagian header</h4>
    <br>
    @yield('content')
</body>
</html>