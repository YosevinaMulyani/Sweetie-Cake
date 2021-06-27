<!DOCTYPE html>
<html>

<head>
    <title> {{config('app.name')}} </title>
    <link rel="shortcut icon" href="/asset/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar" style="background-color:#FFC0CB;">
    <div class="container">
        <a class="navbar-brand" href="/index" style="color:#DB7093;">
            <img style=" background-color:#EEE8AA;" src="/asset/logo.png" href="/index" alt="" width="30" height="30" href="/index">
            {{config('app.name')}}
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            </ul>
            <a type="button" class="btn" style="background-color:#DB7093; color:white;" href="daftarform">Daftar</a>
        </div>
    </div>
</nav>

<body>
    <div class="container" style="padding-top:50px;">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <h2 class="text-center" style="color:#DB7093;"> Login </h2>
                    <div class=" card-body">
                        <form method="post" action="/login">
                            {{csrf_field('')}}
                            <div class="form-group">
                                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn" style="background-color:#DB7093; color:white">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>