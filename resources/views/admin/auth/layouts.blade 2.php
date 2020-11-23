<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid w-100 h-100">
        <div class="container text-center mt-4">
          <h1 class="display-4"> @yield('titel') </h1>
          <div class="mt-4">
            @yield('content')
          </div>
        </div>
      </div>
</body>
</html>