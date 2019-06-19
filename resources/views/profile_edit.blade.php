@extends('layouts.app')

@section('content')

    <body>

    <div class="d-flex" id="wrapper">

        <div class="bg-light border-right text-center" id="sidebar-wrapper">
        <div><h3>Menu</h3></div>
        <div class="list-group list-group-flush">
            <a href="/user/{{auth()->user()->id}}/edit" class="list-group-item list-group-item-action bg-light">Info Edit</a>
            <a href="/user/{{auth()->user()->id}}/set" class="list-group-item list-group-item-action bg-light">Supporter</a>
        </div>
        </div>


        <div class="row container-fluid">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <h1 class="mt-4 text-center">Profile Edit Form</h1>
                <div class="dropdown-divider py-1"></div>
                <form action="/user/{{ $user->id }}/update">
                    @csrf
                    <!-- group_name -->
                    <div class="form-group row">
                        <label for="groupname" class="col-md-4 col-form-label text-md-right">group Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control {{ $errors->has('group_name') ? ' is-invalid' : '' }}" name="group_name" value="{{ $user->group_name }}">

                            @if ($errors->has('group_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('group_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- email -->
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- new_password -->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <!-- confirmation new password -->
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-md-center">
                            <input type="submit" class="btn btn-primary" value="Update" style="width:170px;">
                        </div>
                    </div>
                </form>
            </div>

            </div>
            <div class="col-sm-2"></div>
        </div>
        </div>

    </div>

    </body>


@endsection