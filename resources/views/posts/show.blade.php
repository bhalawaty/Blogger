@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
        </h3>

        <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}</p>
            <p class="blog-post-body">{{$post->body}}</p>
  <hr>
            <div class="comments">
                <ul class="list-group">

                    @foreach($post->comments as $comment    )
                        <li class="list-group-item">
                         {{$comment->user->name}} From
                            <strong style="font-weight: bolder;font-family:Georgia">{{$comment->created_at->diffForHumans()}}:&nbsp;</strong>

                           {{$comment->body}}

                        </li>
                    @endforeach
                </ul>
            </div>
            {{--add comment--}}
            <hr>
            <div class="card">
                <div class="card-block">
                    <form action="/post/{{$post->id}}/comments" method="Post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="body" name="body" placeholder="Add ur Comment" ></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

                        @include('layouts.errors')



                    </form>
                </div>
            </div>


        </div><!-- /.blog-main -->


    </div>
@endsection