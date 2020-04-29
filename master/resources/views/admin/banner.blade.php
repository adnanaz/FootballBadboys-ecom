@extends('layout.admin')

@section('title','Banner')

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
                                <div class="promotion__main">

                                    <div class="promotion__main-preview">
                                        <h5 class="text-center">PREVIEW</h5>
                                        <figure><img src="../scss/assets/img/preview.png" alt="preview gambar"></figure>
                                    </div>

                                    <div class="promotion__main-change">
                                        <h5 class="text-center">CHANGE BANNER</h5>
                                        <form>
                                            <div class="form-group">
                                                <label for="text-1">Teks 1</label>
                                                <input type="text" class="form-control" id="text-1" placeholder="2020">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-2">Teks 2</label>
                                                <input type="text" class="form-control" id="text-2"
                                                    placeholder="NEW ARRIVAL">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-3">Teks 3</label>
                                                <input type="text" class="form-control" id="text-3"
                                                    placeholder="on the street">
                                            </div>
                                            <div class="form-group">
                                                <label for="text-4">Teks 4</label>
                                                <input type="text" class="form-control" id="text-4"
                                                    placeholder="in the stadium">
                                            </div>

                                            <div class="form-group custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Gambar Model</label>
                                            </div>
                                            <div class="form-group custom-file mt-3 mb-3">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Gambar
                                                    Background</label>
                                            </div>
                                            <div class="save mb-3">
                                                <button type="submit" class="btn btn-primary w-45 ">Simpan</button>
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