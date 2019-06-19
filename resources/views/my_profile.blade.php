@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-1" style="background-color:#F2F4F4;">
            <br><br><br><br>
        </div>
        <div class="col-sm-10" style="background-color:#FFFFFF;">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4">
                    <h1 class="text-center">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h1>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-primary py-1 mb-2" href="/user/{{auth()->user()->id}}/edit" role="button">Edit Profile</a>
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-primary py-1 md-2" href="/event_create" role="button">Event Create</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    <h2>My Info</h2>
                        <h4 class="text-left">GROUP-NAME : {{auth()->user()->group_name}}</h4>
                        <h4 class="text-left">E-mail : {{auth()->user()->email}}</h4>
                    <br>
                </div>
                
                <div class="col-sm-1">
                </div>
            </div>

        </div>
        <div class="col-sm-1" style="background-color:#F2F4F4;">
            <br><br><br><br>
        </div>
    </div>



</div>
@endsection
