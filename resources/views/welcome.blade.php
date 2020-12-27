<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>Clone ukey</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>


<body>
    <div id="app">
        <nav-top></nav-top>
        <router-view></router-view>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>