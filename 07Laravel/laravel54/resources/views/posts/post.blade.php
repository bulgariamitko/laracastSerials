@php
  setlocale(LC_TIME, 'Bulgarian');
@endphp
<div class="card">
  <a href="/posts/{{ $post->id }}">
    <h3>{{ $post->title }}</h3>
  </a>
  <h4>{{ $post->user->name }} on {{  $post->created_at->toFormattedDateString() }}</h4>
  <img data-src="holder.js/100px280/thumb" alt="Card image cap">
  <p class="card-text">{{ $post->body }}</p>
</div>