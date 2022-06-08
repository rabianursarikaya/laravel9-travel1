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
        <form class="form-horizontal" action="{{url('/')}}/admin/kategori/save" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Kategori Adı</label>

                    <div class="col-sm-10">
                        <input type="text" name="adi"  required class="form-control"  placeholder="Kategori adı">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Keywords-Anahtar Kelimeler</label>

                    <div class="col-sm-10">
                        <input type="text" name="keywords" class="form-control"  placeholder="Keywords">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Description-Açıklama</label>

                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control"  placeholder="Description">
                    </div>
                </div>


                <div class="form-group">
                    <label  class="col-sm-2 control-label">Kategorisi</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="ust_id">
                            <option value="0">Kategori Yok</option>

                            <?php

                            $baglanti = new mysqli("localhost", "root", "", "laravel9-travel1");

                            if ($baglanti->connect_errno > 0) {
                                die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
                            }

                            $baglanti->set_charset("utf8");

                            echo "Veri çekme işlemi";
                            $categories = $baglanti->query("SELECT * FROM categories");
                            $baglanti->close();
                            ?>
                            @foreach($categories as $rs)
                                <option value="{{$rs->id}}">{{$rs->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Aktif Durum</label>

                    <div class="col-sm-10">
                        <select class="form-control" name="durum">
                            <option>Evet</option>
                            <option>Hayır</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori Ana resim</label>
                    <div class="col-sm-10">
                        <input type="file" required name="resim">
                    </div>
                    <p class="help-block">Resim dosyası seçiniz.</p>
                </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">KAYDET</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>



    @include('Admin.footer')
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- Sale & Revenue Start -->


@endsection
