@extends('layouts.master')

@section('content')
	<section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album REALLY?</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          @include('layouts.sidebar')
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">

        <div class="row">
        @foreach ($posts as $post)
          @include('posts.post')
        @endforeach
        </div>

      </div>
    </div>
@endsection