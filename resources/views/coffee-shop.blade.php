<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style>
    body {
        height: 100vh;
        overflow: hidden;
    }
    .main-background-img{
        z-index: -1;
        width: 100%;
        height: auto;
        position: absolute;
        top:0;
        left:0;
    }
</style>
</head>
<body>
    <img class="main-background-img" src="{{ asset('/storage/images/traditional-coffee-cup-heart-shaped-steam-rustic-wood.jpg') }}" alt="Your Image">
    <div class="container home-page-container">
        <h1 style="text-align: center ; margin:5% auto ; color:rgb(208, 208, 208);text-decoration:underline">Welcome
           <br> <span style="color: brown; text-decoration:none;font-size:larger"> 'Coffee Shop' </span>
        </h1>
        <div class="row mx-auto">
            <div class="col-12 mx-auto">
                <h1 class="text-center text-white">{{setting('site.title')}}</h1>
                <a class="btn btn-success text-decoration-none mx-auto d-block w-25 mt-5" href="/admin">
                    <h3 class="">Admins Login</h3>
                </a>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>