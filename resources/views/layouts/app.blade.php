<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name','Laravel')}}</title>
    <h1>App layout </h1>
    <p style="color:red;"> This is an app layout page</p>
</head>
<body>
    @yield('content')
    
</body>
</html>