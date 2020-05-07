@extends('layout.admin')

@section('title','Category')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Category</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                                <li class="breadcrumb-item active">Category Admin</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="add">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                                        <img class="add__img" src="/scss/assets/img/admin/add.png" alt="">
                                        <span class="">Tambah
                                            Kategori Baru</span>
                                    </a>

                                </div>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($categories as $key=>$category)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>
                                                    {{$category->name}}
                                                </td>
                                                <td><a href="{{ route('category.destroy', $category) }}"><img
                                                            src="/scss/assets/img/minus_red.png" width="30px"
                                                            height="30px" alt="Delete"></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal 1-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('addcategory.store') }}" method="POST">
                                        {{ csrf_field() }}
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="nama_kategori">Nama Kategori</label>
                                                        <input type="text" class="form-control" name="name" id="nama_kategori"
                                                            aria-describedby="textHelp">
                                                        <small id="textHelp" class="form-text text-muted">Tambah Kategori
                                                            apabila ada jenis produk baru..</small>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal 1 -->

                            <!-- /.card-body -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection