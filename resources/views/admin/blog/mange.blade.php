@extends('admin.master')

@section('body')
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>SL NO</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->author}}</td>
                        <td>{{$blog->description}}</td>
                        <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                        <td><img src="{{asset($blog->image)}}" alt="{{$blog->name}}" height="50" width="70"/></td>
                        <td>
                            <a href="{{route('detail.blog', ['id' => $blog->id])}}" class="btn btn-outline-info">
                                <i class="fa fa-edit">Detail</i>
                            </a>
                            <a href="{{route('edit.blog', ['id' => $blog->id])}}" class="btn btn-outline-success">
                                <i class="fa fa-edit">Edit</i>
                            </a>
                            <a href="{{route('update.blog-status', ['id' => $blog->id])}}" class="btn btn-outline-primary">
                                <i class="fa fa-arrow-up">Status</i>
                            </a>
                            <a href="{{route('delete.blog', ['id' => $blog->id])}}" class="btn btn-outline-danger" onclick="return confirm('are your sure to delete this..')" >
                                <i class="fa fa-trash">Delete</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection


