@extends('layouts.master')

@section('content')
	<div class="col-md-8">
		<h1>Register</h1>
		<form method="POST" action="/register">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Name" required>
				<small id="nameHelp" class="form-text text-muted">You need to enter a name.</small>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
				<small id="emailHelp" class="form-text text-muted">You need to enter an email.</small>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Password" required>
				<small id="passwordHelp" class="form-text text-muted">You need to enter a password.</small>
			</div>
			<div class="form-group">
				<label for="password_confirmation">Confirm password</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" aria-describedby="passwordConfirmHelp" placeholder="Confirm password" required>
				<small id="passwordConfirmHelp" class="form-text text-muted">You need to confirm the password.</small>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>

			@include('layouts.errors')
		</form>
	</div>
@endsection