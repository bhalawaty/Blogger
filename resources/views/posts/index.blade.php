@extends('layouts.master')
@section('news')

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">second Build From Jenkins **Done**</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Featured post</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#">Continue reading</a>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Post title</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#">Continue reading</a>
                </div>

            </div>
        </div>
    </div>
    @endsection
@section('content')

    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
        </h3>
            @foreach($posts as $post)
            <div class="blog-post">
                <a href="/posts/{{$post->id}}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
                <p class="blog-post-meta">{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}</p>
                @if(count($post->tags))
                    <ul>
                        @foreach( $post->tags as $tag)
                            <li>
                                <a href="/posts/tags/{{$tag->name}}">#{{$tag->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                <p class="blog-post-body">{{$post->body}}</p>

            </div><!-- /.blog-main -->
        @endforeach
    </div>
@endsection
