@extends('layouts.admin')

@section('title', 'Add Place)

@section('content')
    <!-- Content Start -->

    <section class="content-header">
        <h1>
            Add Place

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add Place</a></li>

        </ol>
    </section>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Place Form</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{url('/admin/place/store')}}" method="post" enctype="multipart/form-data" >
            @csrf

            <div class="card-body">
                <div class="card-body">
                <div class="form-group">
                    <label>Parent Place</label>
                    <select class="form-control select2" name="parent_id" >

                        @foreach($data as $rs)
{{--                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->$title)}}</option>--}}
                        @endforeach
                    </select>

                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title"  class="form-control" value="{{$data->title}}">
                </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" name="keywords"  class="form-control"  value="{{$data->title}}">
                    </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description"  class="form-control" value="{{$data->title}}" >
                        </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">CategoryId</label>
                        <input type="text" name="categoryId"  class="form-control" value="{{$data->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail</label>
                        <input type="text" name="description"  class="form-control"  value="{{$data->title}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" name="city"  class="form-control" value="{{$data->title}}" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Created_at</label>
                        <input type="text" name="created_at"  class="form-control" value="{{$data->title}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Updated_at</label>
                        <input type="text" name="updated_at"  class="form-control" value="{{$data->title}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                        <input type="text" name="location"  class="form-control" value="{{$data->title}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserId</label>
                        <input type="text" name="userId"  class="form-control"  value="{{$data->title}}" >
                    </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Status </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="status" >
                            <option  value=true>True</option>
                            <option value=false>False</option>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" >
                        </select>
                    </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input"  name="image" value="{{$data->title}}">
                    </div>
                    <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                </div>
            <!-- /.box-body -->
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <!-- /.box-footer -->





    @include('Admin.footer')
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- Sale & Revenue Start -->


@endsection
