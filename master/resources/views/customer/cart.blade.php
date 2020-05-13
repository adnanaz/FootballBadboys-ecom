@extends('layout.customer')

@section('title','Cart - FootballBadboys')

@section('content')

<section class="checkout">
    <div class="container border shadow">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Detail Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
        <!--END Breadcrumb -->    
        <ul>
            <li>
                @include('layout.partials._alert')
            </li>
        </ul>
        <h4>YOUR ORDER</h4>

        @foreach (Cart::content() as $item)
            
        <div class="product__parent">
            <div class="product__img">
                
                <img src="{{ asset('storage/products/'. json_decode($item->model->image)[0]) }}" alt="Product Image">
            </div>

            <div class="product__detail">
                <div class="product__txt">
                    <a href="{{ route('product.show', $item->model->slug) }}"><h5>{{ $item->model->name }}</h5></a>
                    <span>Warna : {{ $item->options->color }}</span>
                    <span>Size : {{ $item->options->size }}</span>
                </div>
                <div class="quantity">
                    <input class="quantity__input" type="number" value="{{ $item->qty }}" min="1" data-id="{{ $item->rowId }}">
                </div>
                <div class="product__delete">
                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit"><img class="hvr-pulse-grow" src="/scss/assets/img/trash.png" alt="delete product"
                            width="30vh"></button>
                    </form>
                </div>
                <div class="product__price-checkout">
                    <span>Rp. <span class="value"><?php if($item->model->price_discount == 0){ echo format_uang($item->subtotal); }else{echo format_uang($item->subtotal);}?></span></span>
                </div>
            </div>
        </div>

        @endforeach

        <div class="flex-event">
            <div class="pricing">
                <span>Subtotal</span>
                <strong><span>Total</span></strong>
            </div>

            <div class="value__pricing">
                <span>Rp. <span class="value">{{ format_uang(Cart::subtotal()) }}</span></span>
                <strong><span>Rp. <span class="value">{{ format_uang(Cart::total()) }}</span></span></strong>
            </div>
        </div>
        <div class="btn__submit">
            <a href="{{ route('checkout.index') }}"> <button type="submit" class="w-100 btn btn-dark mb-5">Bayar
                    Sekarang</button></a>
        </div>
    </div>
</section>

<script>
    (function(){
        const classname = document.querySelectorAll('.quantity__input')

        Array.from(classname).forEach(function(element){
            element.addEventListener('change', function(){
            const id = element.getAttribute('data-id')
            axios.patch(`/cart/${id}`, {
                quantity: this.value
            })
            .then(function (response) {
                window.location.href = '{{ route('cart.index') }}'
            })
            .catch(function (error) {
                console.log(error);
            });
            })
        })
    })();
</script>

@endsection