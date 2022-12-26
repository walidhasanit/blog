@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Edit Blog Form</h5>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('update.blog', ['id' => $blog->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$blog->title}}" id="horizontal-firstname-input" name="title"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input3" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="horizontal-password-input3" name="description">{{$blog->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
                                <img src="{{asset($blog->image)}}" height="80" width="90" alt="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label><input type="radio" {{$blog->status == 1 ? 'checked' : ''}} name="status" value="1" /> Published</label>
                                <label><input type="radio" {{$blog->status == 0 ? 'checked' : ''}} name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Blog</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

