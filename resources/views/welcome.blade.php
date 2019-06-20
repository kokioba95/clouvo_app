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
        @if (Route::has('login'))
            <div class="text-right links">
                @auth
                    <a href="{{ url('/my_profile') }}">Home</a>
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
                                <div class="col-sm-1" style="background-color:#ffffff">
                                </div>
                                <div class="row col-sm-10" style="background-color:#ffffff">
                                    <div class="col-sm-9" style="background-color:#ffffff">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="image/top_1.jpg" style="width:1000px; height:350px;" alt="slide" class="img-responsive center-block">
                                                </div>
                                                <div class="item">
                                                    <img src="image/top_2.jpg" style="width:1000px; height:350px;" alt="slide" class="img-responsive center-block">
                                                </div>
                                                <div class="item">
                                                    <img src="image/top_3.jpg" style="width:1000px; height:350px;" alt="slide" class="img-responsive center-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 text-center " id="search_bar" style="background-color:#F2F4F4; height:350px;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h3>Find Events</h3>
                                    <br>
                                        <span class="align-middle">
                                            <a class="btn btn-warning py-1 md-2" href="/event_list" role="button">Event List</a>
                                        </span>
                                    <br>
                                    </div>
                                        <div class="row card-group1" style="width: 100%;">
                                            <div class="col-sm-4 card" style="background-color:#ffffff" >
                                                <img src="image/top_1.jpg" style="width:350px; height:150px;"alt="slide" class="img-responsive center-block">
                                                <div class="card-body">
                                                    <h4 class="card-title">Topix-info(EXAMPLE)-cards1-left</h4>
                                                    <p class="card-text">example...example ...example...example ...</p>
                                                    <a href="#" class="btn btn-primary">Go topix-info</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 card" style="background-color:#ffffff" >
                                                <img src="image/top_2.jpg" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                                <div class="card-body">
                                                    <h4 class="card-title">Topix-info(EXAMPLE)-cards1-center</h4>
                                                    <p class="card-text">example...example ...example...example ...</p>
                                                    <a href="#" class="btn btn-primary">Go topix-info</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 card" style="background-color:#ffffff" >
                                                <img src="image/top_3.jpg" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                                <div class="card-body">
                                                    <h4 class="card-title">Topix-info(EXAMPLE)-cards1-right</h4>
                                                    <p class="card-text">example...example ...example...example ...</p>
                                                    <a href="#" class="btn btn-primary">Go topix-info</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row card-group2" style="width: 100%;">
                                            <div class="col-sm-1 card" style="background-color:#ffffff" >
                                            </div>
                                            <div class="col-sm-4 card" style="background-color:#ffffff" >
                                                <div class="cards">
                                                    <img src="image/top_1.jpg" style="width:350px; height:150px;"alt="slide" class="img-responsive center-block">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Promotion-info(EXAMPLE)-cards2-left</h4>
                                                        <p class="card-text">example...example ...example...example ...</p>
                                                        <a href="#" class="btn btn-primary">Go Promotion-info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 card" style="background-color:#ffffff" >
                                            </div>
                                            <div class="col-sm-4 card" style="background-color:#ffffff" >
                                                <div class="cards">
                                                    <img src="image/top_2.jpg" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Promotion-info(EXAMPLE)-cards2-right</h4>
                                                        <p class="card-text">example...example ...example...example ...</p>
                                                        <a href="#" class="btn btn-primary">Go Promotion-info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1 card" style="background-color:#ffffff" >
                                            <br><br><br><br>
                                            </div>
                                        </div>
                        
                                        <div class="row card-group3" style="width: 100%;">
                                            <div class="col-sm-1 card" style="background-color:#ffffff" >
                                            <br><br><br><br>
                                            </div>
                                            <div class="col-sm-4 card" style="background-color:#ffffff" >
                                                <div class="cards">
                                                    <img src="image/top_1.jpg" style="width:350px; height:150px;"alt="slide" class="img-responsive center-block">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Promotion-info(EXAMPLE)-cards3-left</h4>
                                                        <p class="card-text">example...example ...example...example ...</p>
                                                        <a href="#" class="btn btn-primary">Go Promotion-info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 card" style="background-color:#ffffff" >
                                            </div>
                                            <div class="col-sm-4 card" style="background-color:#ffffff" >
                                                <div class="cards">
                                                    <img src="image/top_2.jpg" style="width:350px; height:150px;" alt="slide" class="img-responsive center-block">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Promotion-info(EXAMPLE)-cards3-right</h4>
                                                        <p class="card-text">example...example ...example...example ...</p>
                                                        <a href="#" class="btn btn-primary">Go Promotion-info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1 card" style="background-color:#ffffff" >
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-1" style="background-color:#ffffff">
                                </div>
                        </div>
                    </div>
                </div>

            </body>
        </html>
