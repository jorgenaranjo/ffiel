@extends('layouts.app')

@section('content')
    <div class="presentacion">
        <div class="mask"></div>
    </div>
    <div class="container" style="padding-top: 70px">
    <div class="row">
        <div class="col s12 m12 l8 push-l2">
            <div class="center">
                <img src="{{ asset(env('FFIELFULL')) }}" class="responsive-img" >
            </div>
        </div>
        <div class="col s12 m12 l8 push-l2">
            <div class="panel panel-default">
                <div class="panel-heading center"></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('auth.email') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="red-text text-darken-3">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('auth.password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="red-text text-darken-3">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>{{ trans('auth.login_form') }}
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="center">
                                <a class="btn btn-link orange lighten-1" href="{{ url('/password/email') }}"><i class="material-icons left">help_outline</i> {{ trans('auth.forgot') }}</a>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="center">
                            <a class="btn btn-link purple darken-3" href="{{ route('register') }}"><i class="fa fa-btn fa-user"></i> {{ trans('auth.register') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
