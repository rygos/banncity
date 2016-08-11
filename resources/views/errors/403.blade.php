@extends('layouts.default')
@section('title')
	{{ trans('errors.403.title') }}_@parent
@stop

@section('content')
	<div class="panel panel-default users-index">
		<div class="panel-heading text-center">
			<h1>{{ trans('errors.403.title') }}</h1>
		</div>
		<div class="panel-body">
			{{ trans('errors.403.desc') }}
		</div>
	</div>
@stop