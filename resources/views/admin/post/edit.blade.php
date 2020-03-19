@extends('admin.layouts.admin')
@section('head')
    @include('admin/include/tinyeditor')

@endsection

@section('content')
    <div class="container-fluid">
        <h2>Edit Post</h2>
        @include('admin/include/error')
        {!! Form::model($post,['method'=>'PUT','action'=>['AdminPostController@update',$post->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id','Category') !!}
            {!! Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'select a category']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo','Photo') !!}
            {!! Form::file('photo',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <img src="{{url('images').'/'.$post->photo}}" height="300" width="100%">
        </div>

        <div class="form-group">
            {!! Form::label('body','Content') !!}
            {!! Form::textarea('body',null,['class'=>'form-control content']) !!}
        </div>
        <button class="btn btn-primary btn-icon-split btn-lg mb-2">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
            <span class="text">Save</span>
        </button>
        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE','action'=>['AdminPostController@destroy',$post->id]]) !!}
        <button type="submit" class="btn btn-danger btn-icon-split btn-lg ">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
            <span class="text">Delete</span>
        </button>
        {!! Form::close() !!}
    </div>
@endsection