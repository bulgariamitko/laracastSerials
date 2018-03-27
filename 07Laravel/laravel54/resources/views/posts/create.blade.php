@extends('layouts.master')

@section('content')
	<h1>Create a post</h1>
	<hr>
	<form method="POST" action="/posts">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Title">
	    <small id="emailHelp" class="form-text text-muted">You need to enter a title.</small>
	  </div>
	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea class="form-control" id="body" rows="3" name="body"></textarea>
	  </div>
	  <div class="form-group">
		  <button type="submit" class="btn btn-primary" name="publish">Publish</button>
	  </div>
	  @include('layouts.errors')
	  
	</form>
	
@endsection