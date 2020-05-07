@extends('layout.admin')

@section('title','Banner')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <span class="msg">Edit Banner Kamu Disini..</span>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Promotion</a></li>
                                <li class="breadcrumb-item active">Banner</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="promotion">
                                <div class="promotion__main">

                                    <div style="text-align: center;">
                                        <h3>{{ $banners->year }}</h3>
                                        <h3>{{ $banners->text1 }}</h3>
                                        <h3>{{ $banners->text2 }}</h3>
                                        <h3>{{ $banners->text3 }}</h3>
                                    </div>
                                    <div class="promotion__main-preview">
                                        <figure><img src="{{ asset('storage/banner/'.$banners->model) }}" alt="preview gambar"></figure>
                                    </div>

                                    <div class="promotion__main-change">
                                        <h5 class="text-center">CHANGE BANNER</h5>
                                        <form action="{{ route('banner.update', $banners) }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="text-1">Year</label>
                                                <input type="text" class="form-control" id="year" name="year" placeholder="2020" value="{{ $banners->year }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-2">Teks 1</label>
                                                <input type="text" class="form-control" id="text-1" name="text1"
                                                    placeholder="NEW ARRIVAL" value="{{ $banners->text1 }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-3">Teks 2</label>
                                                <input type="text" class="form-control" name="text2" id="text-2"
                                                    placeholder="on the street" value="{{ $banners->text2 }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-4">Teks 3</label>
                                                <input type="text" class="form-control" id="text-3" name="text3"
                                                    placeholder="in the stadium" value="{{ $banners->text3 }}">
                                            </div>

                                            <div class="form-group custom-file mb-3">
                                                <input type="file" value="Choose File" id="model" name="model">
                                            </div>
                                            <div class="save mb-3">
                                                <button type="submit" class="btn btn-primary w-45 ">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection