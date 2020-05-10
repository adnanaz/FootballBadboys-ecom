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
                <li class="breadcrumb-item active">Discount</li>
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

                <div class="child2 col-10">

                    <div class="child2__item2">

                        @foreach ($discounts as $discount)
                            <figure class="border hvr-grow-shadow">
                                <a href="#">
                                    <h5>{{ $discount->kode_product }}</h5>
                                    <?php $image = json_decode($discount->image)[0]; ?>
                                        <img style="max-width:130px;" src="{{ asset('storage/products/'.$image) }}" alt="{{ $discount->name }}">

                                    <figcaption>{{ $discount->name }}</figcaption>
                                    <span class="price">Rp. <span>{{ $discount->price }}</span></span>
                                    <span class="price">Rp. <span>{{ $discount->price_discount }}</span></span>
                                    <div class="properti hvr-bounce-to-top">
                                    <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                                    <a href="{{ route('editproduct.edit', $discount) }}" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/pencil.png" alt="ikon edit produk"></a>
                                    <a href="{{ route('deleteproduct.delete', $discount) }}" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                        src="/scss/assets/img/admin/trash.png" alt="ikon hapus produk"></a>
                                    </div>
                                </a>
                            </figure>
                        @endforeach

                    </div>
                    </div>

                    {{ $discounts->links() }}
                </div>



                </div>
            </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection