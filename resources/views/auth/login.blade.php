@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s6 offset-s3">
			<div class="login-wrapper">
				@include('partials.form-error')
				<form method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="text" name="username" value="{{old('username')}}" placeholder="Username">
					<input type="password" name="password" value="{{old('password')}}" placeholder="Password">
					<input type="submit" value="Login!">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
