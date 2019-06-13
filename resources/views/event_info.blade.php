@extends('layouts.app')

@section('content')
    
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10" style="background-color:white">
            <div class="row">
                <div class="col-sm-4">
                    <img src="image/top_1.jpg" style="width:100%; height:200px;">
                </div>
                <div class="col-sm-8">
                    <div class="col-sm-12">
                        <h1>Event Title 1</h1>
                    </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-11">
                            <table>
                            <tr>
                                <th><h3>Category</h3></th>
                                <td>:</td>
                                <td><h3>Human</h3></td>
                            </tr>
                            <tr>
                                <th><h3>Area</h3></th>
                                <td>:</td>
                                <td><h3>Tokyo</h3></td>
                            </tr>
                            <tr>
                                <th><h3>DD/MM/YYYY</h3></th>
                                <td>:</td>
                                <td><h3>21/05/2019</h3></td>
                            </tr>
                            </table>                        
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h2>About Event Info</h2>
                    <h4>Event Introduction</h4>
                    <p>Sample---Sample---Sample---Sample---Sample---</p>
                    <br>
                    <h4>Event Details</h4>
                    <p>Sample---Sample---Sample---Sample---Sample---</p>
                    <br>
                    <h4>Want you to support</h4>
                    <p>Sample---Sample---Sample---Sample---Sample---</p>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="card-deck">
                        <div class="card">
                            <h5 class="card-header text-center">Join Here</h5>
                            <div class="card-body btn mx-auto d-block">
                                <a href="#" class="btn mex-auto btn-primary">Join</a>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header text-center">Support Here</h5>
                                <div class="card-body">
                                        <form action="">
                                            <div class="row ">
                                                <div class="col-sm-6">
                                                    <select class="btn mx-auto d-block Support_points" id="Support_points">
                                                        <option>100</option>
                                                        <option>300</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button type="submit" class="btn mx-auto d-block btn-primary">Support</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>



        </div>
        <div class="col-sm-1">
        </div>

    </div>



@endsection