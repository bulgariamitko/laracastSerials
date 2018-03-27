@extends('layouts.master')

@section('content')
	<div class="col-md-8">
		<h1>Sign</h1>
		<form method="POST" action="/login">
			{{ csrf_field() }}
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
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>

			@include('layouts.errors')
		</form>
	</div>
@endsection