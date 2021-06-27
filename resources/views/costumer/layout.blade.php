<!DOCTYPE html>
<html>

<head>
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="/asset/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#FFC0CB;">
    <div class="container">
        <a class="navbar-brand" href="/costumer/index" style="color:#DB7093;">
            <img style="background-color:#EEE8AA;" src="/asset/logo.png" width="30" height="30">
            {{config('app.name')}}
        </a>
        <a href="/costumer/cart">
            <i class="bi bi-cart" style="color:#DB7093; padding-left:20px;"></i>
        </a>
        <a href="/costumer/history">
            <i class="bi bi-clock-history" style="color:#DB7093; padding-left:20px;"></i>
        </a>
        <a href="/costumer/cake">
            <i class="bi bi-clipboard-plus" style="color:#DB7093; padding-left:20px;"></i>
        </a>
        <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person" style="color:#DB7093;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/costumer/profile" style="color:#DB7093;"> {{auth()->user()->nama}}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout" style="color:#DB7093;">
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
</nav>

<body>
    @yield('content')
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>