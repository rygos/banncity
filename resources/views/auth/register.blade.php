@extends('layouts.default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('auth.register.title') }}</div>
				<div class="panel-body">
					@if($connect_data)
					<div class="alert alert-info">
						{{  $connect_data['nickname'] }}{{ trans('auth.register.oauth_alert') }}
					</div>
					@endif
					<form role="form" method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<input type="text" class="form-control" name="username" value="{{ Input::old('username') }}" placeholder="{{ trans('auth.register.username') }}">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" value="{{ Input::old('email') }}" placeholder="{{ trans('auth.register.email') }}">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="{{ trans('auth.register.password') }}">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password_confirmation" placeholder="{{ trans('auth.register.password_confirmation') }}">
						</div>
						@if(!$captcha_register_disabled)
							@include('partials.captcha')
						@endif
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								{{ trans('auth.register.register_button') }}
							</button>
							<a href="/" class="btn btn-default">{{ trans('auth.register.cancel') }}</a>
						</div>
					</form>
				</div>
				<div class="panel-footer">
					{!! trans('auth.register.account_available') !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
