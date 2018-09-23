<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="http://127.0.0.1:8888/public/cdn/bootstrap-3/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8888/public/cdn/bootstrap-material-design/css/roboto.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8888/public/cdn/bootstrap-material-design/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8888/public/cdn/bootstrap-material-design/css/ripples.min.css">

</head>
<body>
    @include('layouts.navbar')

    <div class="container">
      @yield('content')
    </div>


<script src="http://127.0.0.1:8888/public/cdn/jquery/jquery-3.2.1.min.js"></script>

<script src="http://127.0.0.1:8888/public/cdn/bootstrap-material-design/js/material.min.js"></script>
<script src="http://127.0.0.1:8888/public/cdn/bootstrap-material-design/js/ripples.min.js"></script>

<script>
    $.material.init()
</script>
</body>
</html>
