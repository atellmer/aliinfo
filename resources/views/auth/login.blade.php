@extends('admin.app.index')

@section('content')

	<div class="login-container">	
		<form class="form-horizontal form-login" role="form" method="POST" action="{{url('/login')}}">
			{!!csrf_field()!!}
			<div class="form-group">
				<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="e-mail">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="password">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-login">
					<i class="fa fa-btn fa-sign-in"></i>Войти
				</button>
			</div>
		</form>
	</div>

@endsection
