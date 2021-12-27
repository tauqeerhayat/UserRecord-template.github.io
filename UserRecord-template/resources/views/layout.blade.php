<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="header">
        @section('header')
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand ml-1" href="#">ACCOUNT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="user-list" style="color: white;">Users List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: white;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create" style="color: white;">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        @show
    </div>
    <div class="content">
        @section('content')
        @show
    </div>
    <div class="footer">
        @section('footer')
        <h1>Account</h1>
        <span>Copyright © 2016 - 2021. All Rights Are Reserved</span>
        @show
    </div>
</body>

</html>