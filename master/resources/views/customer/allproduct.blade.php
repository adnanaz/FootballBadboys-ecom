@extends('layout.customer')

@section('title','All Product - Football Badboys')

@section('content')

    <!-- all product -->
    <div class="container-fluid">
        <section class="border">
            <div class="main__product">
                <!-- breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Football Badboys</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All-Product</li>
                    </ol>
                </nav>
                <!--end breadcrumb -->


            </div>

            <div class="category__product">
                <div class="category__item1">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="hvr-underline-from-center btn btn-link" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Category
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <a href="{{ route('allproduct.index') }}">All Category</a>
                                                </th>
                                            </tr>

                                            @foreach ($categories as $category)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('allproduct.index', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="category__item2">
                    <div class="allP">
                        <h5>All Product</h5>
                    </div>
                    <!-- item produknya -->

                    @foreach ($products as $product)

                        <figure class="product__figure">
                            <div class="hvr-grow-shadow">
                                <?php $image = json_decode($product->image)[0]; ?>
                                <img class="allProduct__img" src="{{ asset('storage/products/'.$image) }}" alt="{{ $product->name }}">
                                <figcaption>
                                    <h5 class="namaProduk">{{ $product->name }}</h5>
                                    <h5 class="harga">Rp. <span class="value">{{ $product->price }}</span></h5>
                                    <div class="button">
                                        <a href="{{ route('product.show', $product->slug) }}" class="btn btn-outline-info">Detail</a>
                                        <a href="" class="btn btn-outline-primary">Add to Cart</a>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>

                    @endforeach
                    <!-- end item produknya -->


                </div>
            </div>

           

            <nav class="pt-5 page" aria-label="...">
            {{ $products->links() }}
            </nav>
          
            <!-- <nav class="pt-5 page" aria-label="...">
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
            </nav> -->
        </section>
    </div>
    <!-- CART SECTION -->

@endsection