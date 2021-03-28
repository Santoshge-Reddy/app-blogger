@extends('layouts.guest')

@section('content')



<div class="container">
    <div class="section section-text">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto"> 

                <h3 class="title">{{ $post->title  }}</h3>

                <img src="data:image/png;base64,{{ $post->image }}" style="  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;">
  <br>
  <br>
                {!! $post->body !!}
            </div> 
        </div>
    </div>
    <div class="pb-4 ">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="row text-center">
                    <div class="col-xl-8 text-xl-left">
                        <div class="blog-tags">
                            <span class="d-none d-sm-inline">Published on </span> {{ $post->created_at->toDayDateTimeString() }} • 5 min read
                        </div>
                        <div class="blog-tags">
                            Tags:

                            @forelse ($post->tags as $tag)
                                <a href="#"><span style="background-color: #ff9800;" class="badge badge-pill">{{ $tag->name }}</span></a>
                            @empty
                                <span class="label label-danger">No tag found.</span>
                            @endforelse
                                                                
                        </div>
                        <div class="blog-tags">
                            Category:
                            <a href="#">{{ strtoupper($post->category->name) }}</a>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 my-2">
                        <a href="#pablo" class="btn btn-google btn-round">
                            <i class="fa fa-google"></i><span class="d-none d-sm-inline"> 232</span>
                        </a>
                        &nbsp;
                        <a href="#pablo" class="btn btn-twitter btn-round">
                            <i class="fa fa-twitter"></i><span class="d-none d-sm-inline"> 910</span>
                        </a>
                        &nbsp;
                        <a href="#pablo" class="btn btn-facebook btn-round ">
                            <i class="fa fa-facebook-square"></i><span class="d-none d-sm-inline"> 872</span>
                        </a>
                    </div> -->
                </div>
                <!-- <hr> -->
                <!-- <div class="card card-profile card-plain">
                    <div class="row text-center">
                        <div class="col-lg-10 text-lg-left">
                            <h4 class="card-title">{{ ucfirst(@$post->user->name) }} </h4>
                            <p class="description">
                                I keep things running smoothly here. Just call me the Wizard of Oz.
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


            <!-- @include('frontend._comments') -->
            <!-- @includeWhen(Auth::user(), 'frontend._form') -->
            <!-- @includeWhen(!Auth::user(), 'frontend._login') -->










    </div>



    

@endsection
