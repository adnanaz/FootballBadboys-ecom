@extends('layout.customer')

@section('title','Clearance Sell - Football Badboys')

@section('content')

    <!-- all product -->
    <div class="container-fluid">
        <section class="border">
            <div class="main__product">
                <!-- breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Football Badboys</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Clearance Sell</li>
                    </ol>
                </nav>
                <!--end breadcrumb -->


            </div>

            <div class="category__product">

                <div class="category__item2">
                    <div class="allP">
                        <h5>Clearance Sell</h5>
                    </div>
                    <!-- item produknya -->
                    @foreach ($clearancesells as $clearancesell)

                    <figure>
                        <div class="hvr-grow-shadow">
                            <?php $image = json_decode($clearancesell->image)[0]; ?>
                            <img src="{{ asset('storage/products/'.$image) }}" alt="{{ $clearancesell->name }}">
                            <figcaption>
                                <h5 class="namaProduk">{{ $clearancesell->name }}</h5>
                                <h5 class="harga">Rp. <span class="value">{{ $clearancesell->price }}</span></h5>
                                <h5 class="harga">Rp. <span class="value">{{ $clearancesell->price_discount }}</span></h5>
                                <div class="button">
                                    <a href="{{ route('product.show', $clearancesell->slug) }}" class="btn btn-outline-info">Detail</a>
                                    <a href="" class="btn btn-outline-primary">Add to Cart</a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                        
                    @endforeach
                    <!-- end item produknya -->


                </div>
            </div>

            {{ $clearancesells->links() }}
            <nav class="pt-5 page" aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item " aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </section>
    </div>
    <!-- CART SECTION -->
    
@endsection