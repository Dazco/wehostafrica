@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <h2>Edit Category</h2>
        @include('admin/include/error')
        <div class="col-sm-6">
            {!!Form::model($category,['action'=>['AdminCategoryController@update',$category->id],'method'=>'PATCH'])!!}
            <div class="form-group">
                {!!Form::label('category','Edit Category')!!}
                {!!Form::text('category',null,['class'=>'form-control'])!!}
            </div>
            <div class="row">
                <div>
                    {!!Form::submit('submit',['class'=>'btn btn-primary '])!!}
                </div>
                {!!Form::close()!!}

                {!!Form::open(['method'=>'DELETE', 'action'=>['AdminCategoryController@destroy',$category->id]])!!}
                {!! Form::submit('delete',['class'=>'btn btn-danger ']) !!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>

@endsection
