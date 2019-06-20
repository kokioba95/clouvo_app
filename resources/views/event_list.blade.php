@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-sm-1" style="background-color:white">
        </div>

        <div class="col-sm-10" style="background-color:snow">


        @foreach($events as $event)
        <div style="height:30px;">
        </div>
        <div class="card" style="width:100%; height:200px; background-color:white;">
        <div class="row">
            <div class="col-md-8">
                <div class="card-body row">
                    <div class="col-sm-8">
                        <h2 class="card-title">{{ $event->event_title }}</h2>
                    </div>
                    <div class="col-m-4">
                        <a href="/{{ $event->id }}/event_info" class="right btn btn-info">Go Event</a>
                    </div>
                </div>
                <p class="card-text">{{ $event->event_info }}</p>    
            </div>
            <div class="col-md-4">
            <br>
            <br>
                <div>
                    <table>
                        <tr>
                            <th><h4>Category</h4></th>
                            <td>:</td>
                            <td><h4>{{ $event->category }}</h4></td>
                        </tr>
                        <tr>
                            <th><h4>Area</h4></th>
                            <td>:</td>
                            <td><h4>{{ $event->area }}</h4></td>
                        </tr>
                        <tr>
                            <th><h4>Date</h4></th>
                            <td>:</td>
                            <td><h4>{{ $event->date }}</h4></td>
                        </tr>
                    </table> 
                </div>
            </div>
        </div>
        </div>
        @endforeach

        <div class="col-sm-1" style="background-color:white">
        </div>
@endsection 