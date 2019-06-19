@extends('layouts.app')

@section('content')

    <body>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="mt-4 text-center">Event Create</h1>
                <div class="dropdown-divider py-1"></div>  
                <div class="card-body">
                    <form action="{{ route('post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <h5>Event Title</h5>
                            <input type="text" class="form-control form-group" name="event_title" placeholder="Event Title here">
                        </div>
                        <div class="form-group">
                            <h5>Representative Name</h5>   
                            <input type="text" class="form-control form-group" name="representative_name" placeholder="Representative Name here">
                        </div>                                        
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <h5>Date</h5>
                            </div>
                            <div class="col-sm-6">
                                <input type="date" name="event_date" >
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                            <h5>Area</h5>
                            </div>
                            <div class="col-sm-6">
                                <select name="area" id="area_" class="select01">
                                    <option value="selected=selected">-AREA-</option>
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
                                    <option value="48">other country</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <h5>Category</h5>
                            </div>
                            <div class="col-sm-6">
                            <select name="Category" id="category" class="Right">
                                <option value="selected=selected">-CATEGORY-</option>
                                <option value="1">Local Community</option>
                                <option value="2">Education</option>
                                <option value="3">Human</option>
                                <option value="4">Welfare</option>
                                <option value="5">other</option>
                            </select>
                            </div>
                        </div>

                        <h5>Event info</h5>
                        <textarea class="form-control form-group" name="event_info" rows="3" placeholder="Event info here"></textarea>
                        <div align="right">
                            <input type="submit" class="btn btn-primary" value="Post" style="width:170px;">
                        </div>
                    </form>
                </div>
        </div>
        <div class="col-sm-2"></div>


    </div>

    </body>


@endsection