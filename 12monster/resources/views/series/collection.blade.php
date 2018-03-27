<div class="container">
    <div class="columns">
        @foreach ($series as $s)
            @include('series.card')
        @endforeach
    </div>
</div>