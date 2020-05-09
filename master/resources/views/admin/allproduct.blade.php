@extends('layout.admin')

@section('title','All Product')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                <li class="breadcrumb-item active">All Product</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="parent">
                <div class="child1 col-2">
                    <div class="child1__item ">
                        <div id="accordion">
                            <div class="card"></div>
                            <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Category
                                </button>
                            </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col"> <a href="{{ route('admin.product') }}" class="hvr-underline-from-center">All Category</a></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row"><a href="{{ route('admin.product', ['category' => $category->id]) }}" class="hvr-underline-from-center"> {{$category->name}} </a></th>
                                        </tr>
                                    @endforeach

                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>


                        <div class="sizes">
                            <span class="jdl">Size</span>
                            <hr>
                            <ul class="size__ul">
                                @foreach ($sizes as $size)
                                    <li class="size__li"><a href="{{ route('admin.product', ['size' => $size->slug]) }}" class="btn btn-outline-info">{{ $size->name }}</a></li>        
                                @endforeach
                            
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="child2 col-10">
                    <div class="child2__item">
                    <div class="add">
                        <a href="{{ route('admin.addproduct') }}">
                        <img class="add__img" src="/scss/assets/img/admin/add.png" alt="">
                        <span data-toggle="modal" data-target="#exampleModalCenter" class="">Tambah
                            Produk</span>
                        </a>

                        <form class=" form-inline ml-3 float-right" action="{{ route('product.search') }}" method="GET">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" name="search" id="search" placeholder="Search"
                            aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>

                    <div class="child2__item2">

                        @foreach ($products as $product)
                            <figure class="border hvr-grow-shadow">
                                <a href="#">
                                    <h5>{{ $product->kode_product }}</h5>
                                    <?php $image = json_decode($product->image)[0]; ?>
                                        <img style="max-width:130px;" src="{{ asset('storage/products/'.$image) }}" alt="{{ $product->name }}">

                                    <figcaption>{{ $product->name }}</figcaption>
                                    <span class="price">Rp. <span>{{ $product->price }}</span></span>
                                    <div class="properti hvr-bounce-to-top">
                                    <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                                    <a href="{{ route('editproduct.edit', $product) }}" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/pencil.png" alt="ikon edit produk"></a>
                                    <a href="{{ route('deleteproduct.delete', $product) }}" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/trash.png" alt="ikon hapus produk"></a>
                                    </div>
                                </a>
                            </figure>
                        @endforeach

                    </div>
                </div>
                
                {{ $products->links() }}
            </div>



                </div>
            </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection