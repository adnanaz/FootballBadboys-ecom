@extends('layout.admin')

@section('title','Content Promotion')

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
                            <div class="promotion__main2">
                                <div class="promotion__main-preview2 text-center">
                                    <figure>
                                        <img id="image-preview" src="{{ asset('storage/contentpromotion/'.$contentpromotion->image1) }}" alt="preview 1">
                                    </figure>
                                    <figure>
                                        <img id="image-preview2" src="{{ asset('storage/contentpromotion/'.$contentpromotion->image2) }}" alt="preview 2">
                                    </figure>
                                </div>
                                <form action="{{ route('contentpromotion.update', $contentpromotion) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="promotion__main-change2">
                                            <div class="form-group custom-file mt-3 mb-3">
                                                <input type="file" class="custom-file-input" name="image1" id="image-source"
                                                    onchange="previewImage();">
                                                <label class="custom-file-label" for="customFile">Gambar Background
                                                    1</label>
                                                <small id="imgHelp" class="form-text text-muted">Pastikan Gambar
                                                    Background 1 dan Background 2 ukuranya sama</small>
                                            </div>
                                            <div class="form-group custom-file mt-3 mb-3">
                                                <input type="file" class="custom-file-input" name="image2" id="image-source2"
                                                    onchange="previewImage2();">
                                                <label class="custom-file-label" for="customFile">Gambar Background
                                                    2</label>
                                                <small id="imgHelp" class="form-text text-muted">Pastikan Gambar
                                                    Background 1 dan Background 2 ukuranya sama</small>
                                            </div>
                                        <button type="submit" class="mt-3 btn btn-primary w-50">Simpan
                                        </button>
                                    </div>
                                </form>
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