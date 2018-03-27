@extends('layouts.master')

@section('content')
	<div class="col-sm-8">
		<h1>{{ $post->title }}</h1>
		
		@if (count($post->tags))
			<ul>
				@foreach ($post->tags as $tag)
					<li>
						<a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
					</li>
				@endforeach
			</ul>
		@endif

		{{ $post->body }}
		
		<hr>
		<div class="comments">
			<ul class="list-group">
				@foreach ($post->comments as $comment)
					<li class="list-group-item">
						<strong>
							{{ $comment->created_at->diffForHumans() }}: &nbsp;
						</strong>
						{{ $comment->body }}
					</li>
				@endforeach
			</ul>
		</div>
		{{-- add a comment --}}
		<hr>
		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}
					<div class="form-group">
					    <label for="comment">Comment</label>
					    <textarea class="form-control" id="comment" rows="3" name="body" required></textarea>
					</div>
					<div class="form-group">
						  <button type="submit" class="btn btn-primary" name="publish">Add comment</button>
					</div>
				</form>
				@include('layouts.errors')
			</div>
		</div>
	</div>
@endsection