@extends('layouts.app')

@section('content')
    
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10" style="background-color:white">
        <div>

        
        </div>
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>{{ $event->event_title }}</h1>
                    </div>
                    <div class="col-sm-4">
                        @if (auth()->user()->is_admin)
                            <a class="btn btn-primary" href="/{{$event->id}}/delete" role="button">Delete</a>
                        @else
                        @endif
                    </div>
                </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-11">
                            <table>
                            <tr>
                                <th><h3>Category</h3></th>
                                <td>:</td>
                                <td><h3>{{ $event->category }}</h3></td>
                            </tr>
                            <tr>
                                <th><h3>Area</h3></th>
                                <td>:</td>
                                <td><h3>{{ $event->area }}</h3></td>
                            </tr>
                            <tr>
                                <th><h3>Date</h3></th>
                                <td>:</td>
                                <td><h3>{{ $event->date }}</h3></td>
                            </tr>
                            </table>                        
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h4>{{ $event->event_info }}</h4>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <br>
            <br>
            <!--
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card-deck">
                        <div class="card" >
                            <h5 class="card-header text-center">Join Here</h5>
                                <div class="card-body btn mx-auto d-block" style="width:100px; height:100px;">
                                <h3></h3>
                                </div>
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
                <div class="col-sm-3"></div>
            </div>
            -->
        </div>
        <div class="col-sm-1">
        </div>

    </div>



@endsection