@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <h2>Category Page</h2>
        @include('admin/include/error')
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(['method'=>'POST','action'=>'AdminCategoryController@store']) !!}
                <div class="form-group">
                    {!! Form::label('category','Add Category') !!}
                    {!! Form::text('category',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                        <span class="text">Save</span>
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($categories)>0)
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->category}}</td>
                            <td>{{$category->created_at->diffForHumans()}}</td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning btn-circle" title="edit post">
                                    <i class="fas fa-fw fa-wrench"></i>
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoryController@destroy',$category->id]]) !!}
                                <button type="submit" class="btn btn-danger btn-circle" title="go to post">
                                    <i class="fas fa-trash"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="2" class="text-center">--no category--</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection