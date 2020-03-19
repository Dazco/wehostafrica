@extends('admin.layouts.admin')
@section('head')
    @include('admin/include/tinyeditor')

    @endsection

@section('content')
    <div class="container-fluid">
    <h2>Create Post</h2>
        @include('admin/include/error')
    {!! Form::open(['method'=>'POST','action'=>'AdminPostController@store','files'=>true]) !!}
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
            {!! Form::label('body','Content') !!}
            {!! Form::textarea('body',null,['class'=>'form-control content']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('submit',['class'=>'form-control btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    </div>
    @endsection