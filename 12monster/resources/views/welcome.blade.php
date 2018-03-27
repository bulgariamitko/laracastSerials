<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="/posts">
                    {{ csrf_field() }}
                    <textarea name="body"></textarea>
                    <button type="submit">Add Post</button>
                </form>
                @if (count($errors))
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
            </div>
        </div>
        <hr>
        {{ $user->present()->welcomeMessage() }}

        {{-- @section('content')
            @include('pages.home.header')
            @include('pages.home.skills')
            @include('pages.home.about')
            @include('pages.home.features')
            @include('pages.home.invest')
            @include('pages.home.testimonials')

            @include('series.collection', [
                'series' => $related,
                'width' => 'is-6'
            ])
        @stop

        @foreach ($statuses as $status)
            @include("statuses.{$status->type}")
        @endforeach --}}
    
        <h3>Welcome {{ $user->name }}</h3>

        @if ($user->isSubscribed())
            <button>Download</button>
        @else
            <h3>Please, login to download videos</h3>
        @endif
    </body>
</html>