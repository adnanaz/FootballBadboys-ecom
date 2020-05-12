@extends('layout.admin')

@section('title','Discount')

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
                <li class="breadcrumb-item active">Clearance Sell</li>
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

                <div class="child2 col-12">

                    <div class="child2__item2">

                        @foreach ($clearancesells as $clearancesell)
                            <figure class=" border hvr-grow-shadow">
                                <a href="#">
                                    <h5>{{ $clearancesell->kode_product }}</h5>
                                    <?php $image = json_decode($clearancesell->image)[0]; ?>
                                        <img id="rubah"  src="{{ asset('storage/products/'.$image) }}" alt="{{ $clearancesell->name }}">

                                    <figcaption>{{ $clearancesell->name }}</figcaption>
                                    <span class="price strike discount__price"> Rp. <span>{{ $clearancesell->price }}</span></span>
                                    <span class="price">Rp. <span>{{ $clearancesell->price_discount }}</span></span>
                                    <div class="properti hvr-bounce-to-top">
                                    <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                                    <a href="{{ route('editproduct.edit', $clearancesell) }}" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/pencil.png" alt="ikon edit produk"></a>
                                    <a href="{{ route('deleteproduct.delete', $clearancesell) }}" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/trash.png" alt="ikon hapus produk"></a>
                                    </div>
                                </a>
                            </figure>
                        @endforeach

                    </div>
                    </div>
                </div>
                
                <nav class="d-flex justify-content-center pt-5 page" aria-label="...">
                    {{ $clearancesells->links() }}
                </nav>



                </div>
            </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection