@extends('layout.customer')

@section('title','Football Badboys')

@section('content')

    <section class="main__head">
        <div class="main__head--text">
            <h2>{{ $banner->year }}</h2>
            <h1>{{ $banner->text1 }}</h1>
            <h5 class="h5__left" align="center">{{ $banner->text2 }}</h5>
            <h5 class="h5__center" align="center">{{ $banner->text3 }}</h5>
        </div>
    </section>

    <section class="advertisement">
        <figure>
            <img class="advertisement__img" src="{{ asset('storage/banner/'.$banner->model) }}" alt="model-svg">
        </figure>
    </section>

    <section class="discount">
        <div class="discount__div">
            <div class="discount__img">
                <img class="dc__img" src="/assets/discount.svg" alt="logo discount">
            </div>
            <span class="discount__span">Jadi pembeli pertama di Footballbadboys dan dapatkan harga spesial!</span>
        </div>
    </section>

    <section class="steps">
        <div class="steps_item">
            <figure class="airplane hvr-icon-up">
                <img class="airplane__img hvr-icon" src="/scss/assets/img/airplane2.svg" alt="icon-airplane">
                <figcaption>
                    <h3>Kirim ke mana aja</h3>
                    <p>kami melayani pembelian online dimana saja kapan saja </p>
                </figcaption>
            </figure>

            <figure class="time hvr-icon-up">
                <img class="time__img hvr-icon" src="/scss/assets/img/wa.svg" alt="icon-time">
                <figcaption>
                    <h3>Order Mudah Via Whatsapp</h3>
                    <p>Instant Checkout dengan Contact Form WhatsApp.</p>
                </figcaption>
            </figure>

            <figure class="support  hvr-icon-up">
                <img class="support__img  hvr-icon" src="/scss/assets/img/support2.svg" alt="support-time">
                <figcaption>
                    <h3>Support 24/7</h3>
                    <p>Hubungi kami kapanpun dan dimanapun anda berada</p>
                </figcaption>
            </figure>
        </div>

        <div class="imgBanner">
            <figure>
                <a href="all-product.html" class="hvr-grow-shadow">
                    <img class="imgBanner__img" src="{{ asset('storage/contentpromotion/'.$contentpromotion->image1) }}" alt="gambar iklan 1">
                </a>
            </figure>
        </div>

        <figure>
            <a href="all-product.html" class="hvr-grow-shadow">
                <img class="imgBanner__img" src="{{ asset('storage/contentpromotion/'.$contentpromotion->image2) }}" alt="gambar iklan 2">
            </a>
        </figure>
        </div>
    </section>

    <section class="product">
        <div class="container-fluid">
            <div class="product__text">
                <h1>FEATURED PRODUCT</h1>
                <p>FootballBadboys menawarkan produk-produk terbaik dengan harga yang terjangkau</p>
            </div>

            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <article class="product__item">
                                <a href="{{ route('product.show', $product->slug) }}" class="product__hover hvr-grow-shadow">
                                    <?php $image = json_decode($product->image)[0]; ?>
                                    <img class="product__item--img" src="{{ asset('storage/products/'.$image) }}" alt="{{ $product->name }}">
                                    <div class="productDesc">
                                        <span class="product__name">{{ $product->name }}</span>
                                        <span class="product__price">Rp. <span>{{ $product->price }}</span> </span>
                                    </div>  
                                </a>
                            </article>
                        </div>
                    @endforeach
                    
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>


    </section>

    <section class="media">
        <div class="cotaniner-fluid">
            <div class="media__text">
                <h1>FILOSOFI </h1>
                <img src="/scss/assets/img/hh.png" width="150px" alt="Philosophy logo FootballBadboys" class="mb-3">
                <p>Starting from a love of foreign and domestic football this name was born when thinking about the
                    development of football therefore, ballboys will never be for from the scope of foreign and
                    domestic football its own pride can give birth to you in the arena of worldy football </p>
                <h5>BORN ON 13th NOVEMBER 2017</h5>
                <span class="latina">Founder : Rachel Aditya Nosfandika</span>
                <br>
                <img src="/scss/assets/img/bear4.png" alt="logo-bear" width="50px" height="30px">

            </div>
        </div>

    </section>

<script src="/node_modules/swiper/js/swiper.js"></script>
<script src="/node_modules/swiper/js/swiper.min.js"></script>

    <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        // init: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        speed: 900,
        loop: true,
        autoplay: {
            delay: 1500,

            disableOnInteraction: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },

            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1600: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        }
    });
    </script>

@endsection