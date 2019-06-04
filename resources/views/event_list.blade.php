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
    <div class="text-rigth full-height" style="background-color:#f08300">

    <p class="text-right">Login Register</p>  
    <!--   
        @if (Route::has('login'))
            <div class="text-right links">
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
    -->
    </div>


            <body>
                <div class="container">
                    <div row>
                        <div class="col-sm-1" style="background-color:white">
                        </div>
                        <div class="col-sm-10" style="background-color:snow">
                            <div style="height:30px;">
                            </div>
                            <div class="card" style="width:100%; background-color:white;">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="image/top_1.jpg" style="width:100%; height:200px;" alt="slide" class="img-responsive center-block">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <div class="col-md-8">
                                    <h3 class="card-title">Event Name 1</h5>
                                    </div>
                                    <div class="col-md2">
                                    <a href="#" class="right btn btn-primary">Go Event</a>
                                    </div>
                                    <p class="card-text">Event_text...Event_text...Event_text...Event_text...Event_text...Event_text...</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        <br>
                            <div class="card" style="width:100%; background-color:white;">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="image/top_1.jpg" style="width:100%; height:200px;" alt="slide" class="img-responsive center-block">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <div class="col-md-8">
                                    <h3 class="card-title">Event Name 2</h5>
                                    </div>
                                    <div class="col-md2">
                                    <a href="#" class="right btn btn-primary">Go Event</a>
                                    </div>
                                    <p class="card-text">Event_text...Event_text...Event_text...Event_text...Event_text...Event_text...</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        <br>
                            <div class="card" style="width:100%; background-color:white;">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="image/top_1.jpg" style="width:100%; height:200px;" alt="slide" class="img-responsive center-block">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <div class="col-md-8">
                                    <h3 class="card-title">Event Name 3</h5>
                                    </div>
                                    <div class="col-md2">
                                    <a href="#" class="right btn btn-primary">Go Event</a>
                                    </div>
                                    <p class="card-text">Event_text...Event_text...Event_text...Event_text...Event_text...Event_text...</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        <br>
                            <div class="card" style="width:100%; background-color:white;">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="image/top_1.jpg" style="width:100%; height:200px;" alt="slide" class="img-responsive center-block">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <div class="col-md-8">
                                    <h3 class="card-title">Event Name 4</h5>
                                    </div>
                                    <div class="col-md2">
                                    <a href="#" class="right btn btn-primary">Go Event</a>
                                    </div>
                                    <p class="card-text">Event_text...Event_text...Event_text...Event_text...Event_text...Event_text...</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        <br>
                        </div>
                        <div class="col-sm-1" style="background-color:white">
                        </div>
                    </div>
                </div>

            </body>
        </html>
