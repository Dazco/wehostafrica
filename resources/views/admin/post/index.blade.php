@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th>Photo</th>
                <th>Title</th>
                <th>Category</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @if(count($posts)>0)
                @foreach($posts as $post)
                <tr>
                    <td><img src="{{url('images').'/'.$post->photo}}" height="150" width="200"></td>
                    <td>{{$post->title}}</td>
                    <td>@if($post->category)
                        {{$post->category->category}}
                        @else
                            no category
                            @endif</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td>
                        <a href="{{route('blog.post',$post->id)}}" class="btn btn-info btn-circle" title="go to post">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning btn-circle" title="edit post">
                            <i class="fas fa-fw fa-wrench"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
             @else
                <td colspan="5" class="text-center">--No Post--</td>
            @endif
            </tbody>
        </table>
    </div>
    @endsection