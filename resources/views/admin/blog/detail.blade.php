@extends('admin.master')

@section('body')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Blog Id</th>
                        <td>{{$blog->id}}</td>
                    </tr>
                    <tr>
                        <th>Blog Title</th>
                        <td>{{$blog->title}}</td>
                    </tr>
                    <tr>
                        <th>Blog Author</th>
                        <td>{{$blog->author}}</td>
                    </tr>
                    <tr>
                        <th>Blog Description</th>
                        <td>{{$blog->description}}</td>
                    </tr>
                    <tr>
                        <th>Blog Image</th>
                        <td><img src="{{asset($blog->image)}}" height="140" width="120" alt=""></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection


