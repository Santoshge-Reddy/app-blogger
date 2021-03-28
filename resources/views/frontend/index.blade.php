@extends('layouts.guest')

@section('content')
    <div class="section">
    <div class="container">

     <!--    <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                @include('frontend._search')
            </div>
        </div> -->


        @forelse ($posts as $post)

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card-header card-header-image">
                    <a href="{{ url("/posts/{$post->id}") }}">
                        <img class="img img-raised" src="data:image/png;base64,{{ $post->image }}" style="width: 100%;
                            border-radius: 6px;
    pointer-events: none;
    box-shadow: 0 5px 15px -8px rgb(0 0 0 / 24%), 0 8px 10px -5px rgb(0 0 0 / 20%);
    ">
                    </a>
                <div class="colored-shadow" style="background-image: url('data:image/jpg;base64,{{ $post->image }}'); opacity: 1;
                "></div></div>
            </div>
            <div class="col-md-8">
                <h6 class="card-category">
                    <a href="#" class="text-dark">{{ strtoupper($post->category->name) }}</a>
                </h6>
                <h3 class="card-title">
                    <a href="{{ url("/posts/{$post->id}") }}">{{ $post->title }} </a>
                </h3>
                <p class="card-tags">
                     @forelse ($post->tags as $tag)
                        <a href="https://material-blog-pro-laravel.creative-tim.com/tag/web-dev"><span style="background-color: #ff9800;" class="badge badge-pill">{{ $tag->name }}</span></a>
                    @empty
                        <span class="label label-danger">No tag found.</span>
                    @endforelse

                                    
                </p>
                <p class="card-description">
                    {{ str_limit($post->body, 200) }}
                    <a href="{{ url("/posts/{$post->id}") }}"> Read More </a>
                </p>
                <p class="author">
                    by
                    <a href="#">
                        <b>{{ @$post->user->name }}</b>
                    </a> • {{ $post->created_at->toDayDateTimeString() }} • 5 min read
                </p>
            </div>
        </div>
        @empty
            <div class="panel panel-default">
                <div class="panel-heading">Not Found!!</div>

                <div class="panel-body">
                    <p>Sorry! No post found.</p>
                </div>
            </div>
        @endforelse

        <div align="center">
            {!! $posts->appends(['search' => request()->get('search')])->links() !!}
        </div>



    </div>
    </div>



@endsection
