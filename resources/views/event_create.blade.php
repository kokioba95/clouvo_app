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
                                    <option value="Hokaido">Hokaido</option>
                                    <option value="Aomori">Aomori</option>
                                    <option value="Iwate">Iwate</option>
                                    <option value="Miyagi">Miyagi</option>
                                    <option value="Akita">Akita</option>
                                    <option value="Yamagata">Yamagata</option>
                                    <option value="Fukushima">Fukushima</option>
                                    <option value="Ibaraki">Ibaraki</option>
                                    <option value="Tochigi">Tochigi</option>
                                    <option value="Gunma">Gunma</option>
                                    <option value="Saitama">Saitama</option>
                                    <option value="Chiba">Chiba</option>
                                    <option value="Tokyo">Tokyo</option>
                                    <option value="Kanagawa">Kanagawa</option>
                                    <option value="Niigata">Niigata</option>
                                    <option value="Toyama">Toyama</option>
                                    <option value="Ishikawa">Ishikawa</option>
                                    <option value="Fukui">Fukui</option>
                                    <option value="Yamanashi">Yamanashi</option>
                                    <option value="Nagano">Nagano</option>
                                    <option value="Gifu">Gifu</option>
                                    <option value="Shizuoka">Shizuoka</option>
                                    <option value="Aichi">Aichi</option>
                                    <option value="Mie">Mie</option>
                                    <option value="Wakayama">Wakayama</option>
                                    <option value="Shiga">Shiga</option>
                                    <option value="Kyoto">Kyoto</option>
                                    <option value="Osaka">Osaka</option>
                                    <option value="Hyogo">Hyogo</option>
                                    <option value="Nara">Nara</option>
                                    <option value="Tokushima">Tokushima</option>
                                    <option value="Kagawa">Kagawa</option>
                                    <option value="Ehime">Ehime</option>
                                    <option value="Kochi">Kochi</option>
                                    <option value="Yamaguchi">Yamaguchi</option>
                                    <option value="Tottori">Tottori</option>
                                    <option value="Shimane">Shimane</option>
                                    <option value="Okayama">Okayama</option>
                                    <option value="Hiroshima">Hiroshima</option>
                                    <option value="Fukuoka">Fukuoka</option>
                                    <option value="Saga">Saga</option>
                                    <option value="Nagasaki">Nagasaki</option>
                                    <option value="Kumamoto">Kumamoto</option>
                                    <option value="Oita">Oita</option>
                                    <option value="Miyazaki">Miyazaki</option>
                                    <option value="Kagoshima">Kagoshima</option>
                                    <option value="Okinawa">Okinawa</option>
                                    <option value="Other country">other country</option>
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
                                <option value="Local Community">Local Community</option>
                                <option value="Education">Education</option>
                                <option value="Human">Human</option>
                                <option value="Welfare">Welfare</option>
                                <option value="Other">other</option>
                            </select>
                            </div>
                        </div>

                        <h5>Event info & Contact info</h5>
                        <textarea class="form-control form-group" name="event_info" rows="6" placeholder="Event info & Contact info here"></textarea>
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