@extends('layouts.default')
@section('title')
    {{ trans('errors.401.title') }}_@parent
@stop

@section('content')
    <div class="panel panel-default users-index">
        <div class="panel-heading text-center">
            <h1>{{ trans('errors.401.title') }}</h1>
        </div>
        <div class="panel-body">
            {{ trans('errors.401.desc') }}
        </div>
    </div>
@stop