<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Twitter Clone</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="HTML5 Example Page">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body class="bg-dark">
        @include('layout.navbar')
        <div class="container">
            @yield('content')
        </div>
        @include('layout.footer')
        <script src="https://kit.fontawesome.com/a5bf0b97dc.js" crossorigin="anonymous"></script>
    </body>
</html>
