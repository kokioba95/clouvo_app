@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>


                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>


                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="group_name" class="col-md-4 col-form-label text-md-right">Group Name</label>


                            <div class="col-md-6">
                                <input id="group_name" type="text" class="form-control{{ $errors->has('group_name') ? ' is-invalid' : '' }}" name="group_name" value="{{ old('group_name') }}" required autofocus>

                                @if ($errors->has('group_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('group_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('birth') || $errors->has('birth_year') || $errors->has('birth_month') || $errors->has('birth_day') ? ' has-error' : '' }}">
                            <label for="birth_year" class="col-md-4 col-form-label text-md-right">Birthday　DD/MM/YYYY </label>

                            <div class="form-group row col-md-8">

                                <div class="col-md-4">
                                    <select id="birth_day" class="form-control" name="birth_day">
                                    <option value="">DD</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                    <option value="{{ $i }}"@if(old('birth_day') == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                    </select>

                                    @if ($errors->has('birth_day'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birth_day') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <select id="birth_month" class="form-control" name="birth_month">
                                    <option value="">MM</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{ $i }}"@if(old('birth_month') == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                    </select>

                                    @if ($errors->has('birth_month'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birth_month') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <select id="birth_year" class="form-control" name="birth_year">
                                    <option value="">YYYY</option>
                                    @for ($i = 1940; $i <= 2019; $i++)
                                    <option value="{{ $i }}"@if(old('birth_year') == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                    </select>

                                    @if ($errors->has('birth_year'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birth_year') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row col-md-6 col-md-offset-4">
                            @if ($errors->has('birth'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birth') }}</strong>
                                </span>
                            @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
