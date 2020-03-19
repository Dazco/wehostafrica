@extends('blog.layouts.blog')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{url('blog/img/home-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{$oneCat}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                @if(count($posts)>0)
                    @foreach($posts as $post)
                        <div class="post-preview">
                            <a href="{{route('blog.post',$post->id)}}">
                                <h2 class="post-title">
                                    {{$post->title}}
                                </h2>
                            </a>
                            <p class="post-meta">Posted
                                {{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <hr>
                    @endforeach
                @else
                    <div class="post-preview">
                        <a href="post.html">
                            <h3 class="post-title">
                                No post available for this category
                            </h3>
                        </a>
                    </div>
                    <hr>
            @endif

            <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection

