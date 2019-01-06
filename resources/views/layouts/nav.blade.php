<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="/posts/create">Create New Post</a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="#">Large</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">

            @if(!auth()->check())

                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>&nbsp;&nbsp;&nbsp;

                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">{{ __('register') }}</a>

            @else

            <a class="p-2 text-muted" href="#">{{auth()->user()->name}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}">{{ __('logout') }}</a>
          @endif
        </div>
    </div>
</header>

<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach($tags as $tag)
            <a class="p-2 text-muted" href="/posts/tags/{{$tag}}">{{$tag}}</a>
            @endforeach


    </nav>
</div>