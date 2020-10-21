@extends('layouts.app')

@section('title', trans('messages.home'))
@push("style")
    <style>
        #headerwrap {
            background: url({{ setting('background') ? image_url(setting('background')) : theme_asset('img/back.jpg') }}) no-repeat center top;
            margin-top: -70px;
            padding-top: 250px;
            text-align:center;
            background-attachment: relative;
            background-position: center center;
            min-height: 650px;
            width: 100%;

            -webkit-background-size: 100%;
            -moz-background-size: 100%;
            -o-background-size: 100%;
            background-size: 100%;

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
@endpush

@section('content')
    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <img src="{{ site_logo() }}" alt="" width="150px">
                    <h1>{{ site_name() }}</h1>
                    @if($server && $server->isOnline())
                        <div>
                            <h4 class="mb-0">{{ $server->name }} - {{ $server->getOnlinePlayers() }}</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>

    <section id="works"></section>
    <div class="container">
        <div class="row centered mt mb">
            <h1>@lang('theme::instant-nather.article')</h1>
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-4 gallery">
                    <a href="{{ route('posts.show', $post->slug) }}" class="link-unstyled">
                        @if($post->hasImage())
                            <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" height="200px">
                        @else
                            <div class="preview-content p-4">
                                <h4>{{ $post->title }}</h4>
                                {{ Str::limit(strip_tags($post->content), 450) }}
                            </div>
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
