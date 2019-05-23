@extends('layouts.app')

@section('content')

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
                                        <img src="https://www.custodian.com.au/wp-content/uploads/2017/06/blog-banner.png" alt="slide" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.custodian.com.au/wp-content/uploads/2015/02/60-Generic-Clean.Still001-1024x576-1024x576.jpg" alt="slide" class="imag-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.custodian.com.au/wp-content/uploads/2015/03/bigstock-Real-estate-investment-in-flat-77407109-1024x1024.jpg" alt="slide" class="image-fluid">
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
                            <div class="row">
                                <div class="col-sm-4" style="background-color:red" >
                                red
                                </div>
                                <div class="col-sm-4" style="background-color:blue" >
                                blue
                                </div>
                                <div class="col-sm-4" style="background-color:yellow" >
                                yellow
                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>

@endsection
