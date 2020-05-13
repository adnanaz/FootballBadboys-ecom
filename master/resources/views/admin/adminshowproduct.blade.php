@extends('layout.admin')

@section('title','Show Product')

@section('content')

<main class="main">
    <!-- all product -->
    <section class="detail border">
        <div class="">
            <div class="row">
                <div class="col-lg-6 detail__flex">
                    <div class="product-wrap">
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <?php foreach (json_decode($product->image)as $picture) { ?>
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/products/'.$picture) }}" class="parent__img" alt="{{ $product->name }}">
                                </div>
                                <?php } ?>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <?php foreach (json_decode($product->image)as $picture) { ?>
                                <div class="swiper-slide">
                                    <img class="child__img" src="{{ asset('storage/products/'.$picture) }}" alt="{{ $product->name }}">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 detail-wrap">
                    <div class="description pt-3">
                        <h5 class="nama-produk">{{ $product->name }}</h5>
                        <h5 class="harga-produk">Rp. <span class="value">
                            <?php if($product->price_discount == 0){ echo $product->price; }else{echo $product->price_discount;}?>    
                        </span></h5>
                        <span class="color">Color : 
                            @foreach($product->colors as $color)
                                {{ $color->name }},
                            @endforeach
                        </span>
                        <p>Description</p>
                        <p class="desc">
                            {!! $product->description !!}
                        </p>

                        <div class="size__form form-group">
                            <span class="jdl">Pilih Warna </span>
                            <hr>
                            <ul class="size__ul">
                                <div class="size__form2">
                                    @foreach($product->colors as $color)
                                    <li class="size__li">
                                        <label class="btn btn-outline-dark warna" style="background-color: {{ $color->name_html }};" for="{{ $color->name }}">
                                        </label>
                                    </li>
                                    @endforeach
                                </div>
                            </ul>
                            
                            <div class="size form-group">
                                <span class="jdl">Size</span>
                                <hr>

                                <ul class="size__ul ">
                                    <div class="size__form2">
                                        @foreach($product->sizes as $size)
                                        <li class="size__li">
                                            <label class="btn btn-outline-info" for="{{ $size->name }}">
                                                {{ $size->name }}
                                            </label>
                                        </li>
                                        @endforeach
                                    </div>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row push-top">
                <!-- YOUTUBE -->
                <div class="col-lg-6 video__preview">
                    <iframe width="100%" height="100%" src="{{ $product->link_video }}"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <!-- END YOUTUBE -->


                <div class="col-lg-6">
                    <div class="product__desc">
                        <h5>MATERIAL</h5>
                        {!! $product->material !!}
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- CART SECTION -->
</main>

<script src="/node_modules/swiper/js/swiper.js"></script>
<script src="/node_modules/swiper/js/swiper.min.js"></script>
<script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 5,
        speed: 900,
        freeMode: false,
        loopedSlides: 1, //looped slides should be the same

    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        slidesPerView: 1,
        freeMode: false,
        speed: 1500,
        autoplay: {
            delay: 3000,
            disableOnInteraction: true,
        },
        loopedSlides: 1, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs,
        },
    });

    $("#checkAll").click(function () {
        $(".check").prop('checked', $(this).prop('checked'));
    });
    
    function searchToggle(obj, evt) {
        var container = $(obj).closest('.search-wrapper');
        if (!container.hasClass('active')) {
            container.addClass('active');
            evt.preventDefault();
        }
        else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
    }
</script>
@endsection