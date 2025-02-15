@extends('blog.layouts.blog')
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{url('images').'/'.$post->photo}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{$post->title}}</h1>
                    <span class="meta">Posted
              {{$post->created_at->diffForHumans()}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
               {{$post->body}}
            </div>
        </div>
    </div>
</article>

<hr>
@endsection
