@extends('layout.admin')

@section('title','Content Promotion')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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

                            <div class="promotion__main2 mt-5">
                                <div class="promotion__main-preview2 text-center">
                                    <figure>
                                        <img src="../scss/assets/img/iklan1.svg" alt="preview 1">
                                    </figure>
                                    <figure>
                                        <img src="../scss/assets/img/iklan2.svg" alt="preview 2">
                                    </figure>
                                </div>

                                <div class="promotion__main-change2">
                                    <form class="form__promotion" action="#">
                                        <div class="form-group custom-file mt-3 mb-3">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Gambar Background
                                                1</label>
                                        </div>
                                    </form>
                                    <form class="form__promotion" action="#">
                                        <div class="form-group custom-file mt-3 mb-3">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Gambar Background
                                                2</label>
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