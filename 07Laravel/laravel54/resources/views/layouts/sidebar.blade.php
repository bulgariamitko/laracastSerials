<h4>Archives</h4>
@foreach ($archives as $stats)
	<li>
	  <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}" class="btn btn-primary">
	    {{ $stats['month'] . ' ' . $stats['year'] }}
	  </a>
	</li>
@endforeach

<h4>Tags</h4>
@foreach ($tags as $tag)
	<li>
	  <a href="/posts/tags/{{ $tag }}" class="btn btn-primary">
	    {{ $tag }}
	  </a>
	</li>
@endforeach