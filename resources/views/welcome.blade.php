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
                                <div class="col-sm-2" style="background-color:#ffffff">
                                    <div class="col-sm-12 text-center" class="stream" style="background-color:#F2F4F4">
                                    <img src="image/no_name_user.jpg" style="width:100px; height:100px;" alt="">
                                    <P>(No name)</P>


                                    <br>
                                    <br>
                                    
                                    </div>
                                    <div class="col-sm-12" style="background-color:#F8F9F9">
                                    <h2>Time Line</h2>
                                    <h4>User A</h4>
                                    <p>User A has signed up for Event A.</p>
                                    <br>
                                    <h4>User B</h4>
                                    <p>User B supported Event A.</p>
                                    <br>
                                    <h4>User A</h4>
                                    <p>User A supported Event B.</p>
                                    <br>
                                    <h4>User A</h4>
                                    <p>User A has signed up for Event C.</p>
                                    <br>
                                    <br>
                                    <br>

                                    </div>
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
                                        <!--
                                        <form class="d-flex justify-content-center " id="area_search" action="/searchresult" accept-charset="UTF-8" method="get">
                                            <select name="area[]" id="area_" class="select01">
                                                <option value="">-AREA-</option>
                                                <option value="1">Hokaido</option>
                                                <option value="2">Aomori</option>
                                                <option value="3">Iwate</option>
                                                <option value="4">Miyagi</option>
                                                <option value="5">Akita</option>
                                                <option value="6">Yamagata</option>
                                                <option value="7">Fukushima</option>
                                                <option value="8">Ibaraki</option>
                                                <option value="9">Tochigi</option>
                                                <option value="10">Gunma</option>
                                                <option value="11">Saitama</option>
                                                <option value="12">Chiba</option>
                                                <option value="13">Tokyo</option>
                                                <option value="14">Kanagawa</option>
                                                <option value="15">Niigata</option>
                                                <option value="16">Toyama</option>
                                                <option value="17">Ishikawa</option>
                                                <option value="18">Fukui</option>
                                                <option value="19">Yamanashi</option>
                                                <option value="20">Nagano</option>
                                                <option value="21">Gifu</option>
                                                 <option value="22">Shizuoka</option>
                                                <option value="23">Aichi</option>
                                                <option value="24">Mie</option>
                                                <option value="25">Wakayama</option>
                                                <option value="26">Shiga</option>
                                                <option value="27">Kyoto</option>
                                                <option value="28">Osaka</option>
                                                <option value="29">Hyogo</option>
                                                <option value="30">Nara</option>
                                                <option value="31">Tokushima</option>
                                                <option value="32">Kagawa</option>
                                                <option value="33">Ehime</option>
                                                <option value="34">Kochi</option>
                                                <option value="35">Yamaguchi</option>
                                                <option value="36">Tottori</option>
                                                <option value="37">Shimane</option>
                                                <option value="38">Okayama</option>
                                                <option value="39">Hiroshima</option>
                                                <option value="40">Fukuoka</option>
                                                <option value="41">Saga</option>
                                                <option value="42">Nagasaki</option>
                                                <option value="43">Kumamoto</option>
                                                <option value="44">Oita</option>
                                                <option value="45">Miyazaki</option>
                                                <option value="46">Kagoshima</option>
                                                <option value="47">Okinawa</option>
                                                <option value="abroad">other country</option>
                                            </select>
                                            <br>
                                            <br>
                                            <select name="DD/MM/YYYY[]" id="DD/MM/YYYY" class="select02">
                                                <option value="">(create_now)DD/MM/YYYY</option>
                                                <option value="1">-</option>

                                            </select>
                                            <br>
                                            <br>
                                            <select name="genre[]" id="category" class="Right">
                                                <option value="">-CATEGORY-</option>
                                                <option value="1">International</option>
                                                <option value="2">Local Community</option>
                                                <option value="3">Education</option>
                                                <option value="4">Human</option>
                                                <option value="5">Agriculture</option>
                                                <option value="6">Welfare</option>
                                                <option value="7">Arts</option>
                                                <option value="8">Sports</option>
                                                <option value="9">Animal</option>
                                                <option value="10">other</option>
                                            </select>
                                            <br>
                                            <br>
                                            <button type="submit" class="d-flex justify-content-center">SEARCH
                                            </button>
                                        </form>
                                        -->
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
                            
                        </div>
                    </div>
                </div>

            </body>
        </html>
