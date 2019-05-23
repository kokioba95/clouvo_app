<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>Clou-Vo</title>
    </head>
    <div class="flex-center position-ref full-height">
        
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        </div>

            <body>
                <div>
                    <div class="container">
                            <div class="row">
                                <div class="col-sm-2" style="background-color:red;">
                                    <div class="col-sm-12" style="background-color:blue;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    </div>
                                    <div class="col-sm-12" style="background-color:green;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    </div>
                                </div>

                                <div class="col-sm-10" style="background-color:blue">
                                    blue
                                    <div class="col-sm-12" style="background-color:green">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>

                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" style="width:1000px; height:350px;" alt="slide" class="img-responsive center-block">
                                                </div>
                                                <div class="item">
                                                    <img src="https://www.custodian.com.au/wp-content/uploads/2015/02/60-Generic-Clean.Still001-1024x576-1024x576.jpg" style="width:1000px; height:350px;" alt="slide" class="img-responsive center-block">
                                                </div>
                                                <div class="item">
                                                    <img src="https://www.custodian.com.au/wp-content/uploads/2015/03/bigstock-Real-estate-investment-in-flat-77407109-1024x1024.jpg" style="width:1000px; height:350px;" alt="slide" class="img-responsive center-block">
                                                </div>
                                            </div>

                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                    <div>
                                    
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-4" style="background-color:red" >
                                        <div class="item">
                                            <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" style="width:350px; height:150px;"alt="slide" class="img-responsive center-block">
                                        </div>
                                        red
                                        </div>
                                        <div class="col-sm-4" style="background-color:blue" >
                                        <div class="item">
                                            <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                        </div>
                                        blue
                                        </div>
                                        <div class="col-sm-4" style="background-color:yellow" >
                                        <div class="item">
                                            <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                        </div>
                                        yellow
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6" style="background-color:red" >
                                        <div class="item">
                                            <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" style="width:350px; height:150px;"alt="slide" class="img-responsive center-block">
                                        </div>
                                        red
                                        </div>
                                        <div class="col-sm-6" style="background-color:blue" >
                                        <div class="item">
                                            <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                        </div>
                                        blue
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6" style="background-color:yellow" >
                                        <div class="item">
                                            <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                        </div>
                                        yellow
                                        </div>
                                        <div class="col-sm-6" style="background-color:green" >
                                        <div class="item">
                                            <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                        </div>
                                        green
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>

            </body>
        </html>
