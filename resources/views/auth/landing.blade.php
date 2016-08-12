@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('auth.landing.title') }}</div>
                    <div class="panel-body">
                    <div class="row">
                        <div class="panel-body">{{ $connect_data['nickname'] }}{{trans('auth.landing.welcome')}}</div>
                    </div>
                        <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{trans('auth.landing.option.1.title')}}</div>
                        <div class="panel-body text-center">
                            <a href="/auth/login" class="btn btn-success btn-lg">{{trans('auth.landing.option.1.button')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{trans('auth.landing.option.2.title')}}</div>
                        <div class="panel-body text-center">
                            <a data-url="/auth/register" class="btn btn-info btn-lg" data-method='post'>{{trans('auth.landing.option.2.button')}}</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                <div class="panel-footer">
                    <i class="fa fa-user"></i> {{ trans('auth.landing.note', ['provider' => $connect_data['provider_name'], 'name' => $connect_data['nickname']]) }}
                </div>
            </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
