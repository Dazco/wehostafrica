@extends('blog.layouts.blog')
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{url('blog/img/home-bg.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>WeHostAfrica Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
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
                        <h2 class="post-title">
                            No post availablle
                        </h2>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 18, 2019</p>
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

