<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clone ukey</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>
<style>
    #main-page {
        position: relative;
        width: 100%;
        background: #fefefe;
        display: flex;
    }

    .sidebar {
        width: 25%;
        min-height: 100vh;
        border-right: 1px solid lightgray;
    }

    main {
        width: 75%;

    }

    .sidebar .sidebar-link {
        display: block;
        width: 100%;
        padding: 0 10px;
        background: #f9f9f9;
        transition: .1s;
        color: #222;
    }

    .sidebar .sidebar-link:hover {
        text-decoration: none;
        background: #357ca5;
        color: #fff;
    }

    .list-group {
        border-radius: 0;
    }

    .list-group .list-group-item {
        padding: 0;
        border-left: none;
        border-top: none;
        border-right: none;
    }
</style>

<body>
    <div id="app">
        <nav-top></nav-top>
        <div class="container-fluid">
            <div class="row bg-light border-bottom rowBredCrumb">
                <div class="col-md-3 "></div>
                <div class="col-md-9 px-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div id="main-page">
            <div class="sidebar bg-light">
                <ul class="list-group list-unstyled text-capitalize">

                    <a class="sidebar-link" href="#">
                        <li class="list-group-item"><i class="mr-2 fa fa-folder-open"></i>content of the lesson
                    </a></li>
                    <a class="sidebar-link" href="#">
                        <li class="list-group-item"><i class="mr-2 fa fa-envelope"></i>students
                    </a></li>
                    <a class="sidebar-link" href="#">
                        <li class="list-group-item"><i class="mr-2 fa fa-users"></i>groups
                    </a></li>
                    <a class="sidebar-link" href="#">
                        <li class="list-group-item"><i class="mr-2 fa fa-edit"></i>Homeworks-projects
                    </a></li>
                    <a class="sidebar-link" href="#">
                        <li class="list-group-item"><i class="mr-2 fa fa-code"></i>E-exams
                    </a></li>
                    <a class="sidebar-link" href="#">
                        <li class="list-group-item"><i class="mr-2 fa fa-book"></i>course materials
                    </a></li>
                    <a class="sidebar-link" href="#">
                        <li class="list-group-item"><i class="mr-2 fa fa-comments"></i>forum
                    </a></li>
                    <a class="sidebar-link" href="#">
                        <li class="list-group-item"><i class="mr-2 fa fa-video"></i>virtual meetings
                    </a></li>
                </ul>
            </div>
            <main>
                <router-view></router-view>
            </main>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>