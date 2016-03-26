@extends('quickadmin::auth.base')

@section('content')
    <p class="login-box-msg">{{ trans('quickadmin.reset.intro') }}</p>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form role="form" method="POST" action="{{ action($ctrl_name.'@postReset') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group has-feedback">
            <input name="email" type="email" class="form-control" placeholder="{{ trans('quickadmin.auth.email') }}" value="{{ old('email') }}" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="{{ trans('quickadmin.auth.password') }}" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name="password_confirmation" type="password" class="form-control" placeholder="{{ trans('quickadmin.reset.confirm') }}" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('quickadmin.reset.change') }}</button>

    </form>
@stop