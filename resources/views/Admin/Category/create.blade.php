@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
    <!-- Content Start -->

    <section class="content-header">
        <h1>
            Kategori Ekleme

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Kategori Ekleme</a></li>

        </ol>
    </section>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Kategori Ekleme Formu</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{url('/admin/category/store')}}" method="post" enctype="multipart/form-data" >
            @csrf

            <div class="card-body">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title"  class="form-control"  placeholder="Title">
                </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" name="keyword"  class="form-control"  placeholder="Keyword">
                    </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description"  class="form-control"  placeholder="Description">
                        </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="text" name="image"  class="form-control"  placeholder="Image">
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <input type="text" name="status"  class="form-control"  placeholder="Status">
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Created_at</label>
                                        <input type="text" name="created_at"  class="form-control"  placeholder="Created_at">
                                    </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Updated_at</label>
                    <input type="text" name="updated_at"  class="form-control"  placeholder="Updated_at">
                </div>



                <div class="form-group">
                    <label  class="col-sm-2 control-label">Kategorisi</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="ust_id">
                            <option value="0">Kategori Yok</option>


                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option>True</option>
                            <option>False</option>

                        </select>
                    </div>


                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input"  name="image">
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
