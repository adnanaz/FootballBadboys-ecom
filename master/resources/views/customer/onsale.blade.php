@extends('layout.customer')

@section('title','On Sale - Football Badboys')

@section('content')

    <!-- all product -->
    <div class="container-fluid">
        <section class="border">
            <div class="main__product">
                <!-- breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Football Badboys</a></li>
                        <li class="breadcrumb-item active" aria-current="page">On Sale</li>
                    </ol>
                </nav>
                <!--end breadcrumb -->


            </div>

            <div class="category__product">

                <div class="category__item2">
                    <div class="allP">
                        <h5>On Sale</h5>
                    </div>
                    <!-- item produknya -->
                    @foreach ($discounts as $discount)

                        <figure class="onSale">
                            <div class="hvr-grow-shadow">
                                <?php $image = json_decode($discount->image)[0]; ?>    
                                <img class="onSale__img" src="{{ asset('storage/products/'.$image) }}" alt="foto produk Bomber">
                                <figcaption>
                                    <h5 class="namaProduk">{{ $discount->name }}</h5>
                                    <h5 class="harga"  id="strike">Rp. <span class="value">{{ format_uang($discount->price) }}</span></h5>
                                    <h5 class="harga">Rp. <span class="value">{{ format_uang($discount->price_discount) }}</span></h5>
                                    <div class="button">
                                        <a href="{{ route('product.show', $discount->slug) }}" class="btn btn-outline-info">Detail</a>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>

                    @endforeach
                    <!-- end item produknyaa -->


                </div>
            </div>

          
            <nav class="pt-5 page" aria-label="...">
            {{ $discounts->links() }}
            </nav>
        </section>
    </div>
    <!-- CART SECTION -->
    
@endsection