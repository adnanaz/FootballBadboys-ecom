<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Ini udah tak downloadin local -->
    <link rel="stylesheet" href="/node_modules/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="/node_modules/swiper/css/swiper.css">

    <link rel="stylesheet" href="/scss/assets/css/main.css">

    <!--     <link rel="stylesheet" href="/scss/scss/admin/assets/css/main.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
    <!-- JANGAN LUPA DIBUATIN OFFLINENYA DIM BIAR ENTENG DOWNLOADKE YA -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        
    <link rel="stylesheet" href="/node_modules/hover.css/css/hover-min.css">
</head>
<header>
    <div class="container-fluid mobileOn" id="header-wrap">
        <div class="flex">
            <div class="menu-btn">
                <span class="menu-btn__burger"></span>
            </div>
            <div class="search lg-on">
                <form action="" class="formSearch">
                    <input class="navSearch" type="search" placeholder="Cari sesuatu?">
                    <img class="fa rounded-circle" src="/scss/assets/img/search.png" width="40" height="40" alt="search">
                </form>
            </div>
            <div class="brand ">
                <a class="navbar-brand" href="#">
                    <img class="" src="/scss/assets/img/header-logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <div class="cuciGudang lg-on">
                <a class="navbar-brand" href="all-product.html">
                    <img class="" src="/scss/assets/img/sale.svg" width="40" height="40" alt="">
                </a>
            </div>

            <div class="cart lg-on">
                <a class="navbar-brand" href="#">
                    <img class="" onclick="toggleCart()" src="/scss/assets/img/cart.svg" width="40" height="40" alt="">
                </a>
            </div>
        </div>
    </div>

    <nav class="nav" id="navbar" style=" transition: top 0.5s;
        height: 65px; position: fixed;">
        <ul class="nav__menu">

            <li class="nav__menu--item active">
                <a href="/" class="hvr-underline-from-center nav__menu--link">
                    NEW ARRIVAL
                </a>
            </li>
            <li class="nav__menu--item custom nav-item dropdown">
                <a href="detail-product.html"
                    class="nav-link dropdown-toggle hvr-underline-from-center nav__menu--link a__custom"
                    data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    SHOP ONLINE
                </a>
                <div class="dropdown-menu" id="drop">
                    <div class="dropdown-item">


                        <ul class="">
                            <li>
                                <a href="{{ route('allproduct.index') }}">All Product</a>
                            </li>

                            @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('allproduct.index', ['category' => $category->id]) }}">{{ $category->name }}</a>
                            </li>
                            @endforeach


                        <ul class="child ">
                            <li>
                                <a href="{{ route('allproduct.index') }}"><img class="adv__img mt-2" src="{{ asset('storage/contentpromotion/'.$contentpromotion->image1) }}" alt="contentpromotion1"></a>
                            </li>
                            <li>
                                <a href="{{ route('allproduct.index') }}"><img class="adv__img mt-2" src="{{ asset('storage/contentpromotion/'.$contentpromotion->image2) }}" alt="contentpromotion2"></a>
                            </li>
                        </ul>

                    </div>
                </div>

            </li>
            <li class="nav__menu--item special">
                <form action="{{ route('consumenproduct.search') }}" method="GET" class="formSearch">
                    <input class="navSearch" type="search" name="search" placeholder="Cari sesuatu?">
                    <button type="submit">
                        <img class=" fa search__img rounded-circle" src="/scss/assets/img/search.png" alt="search">
                    </button>
                </form>
            </li>

            <li class="brand nav__menu--item">
                <a class="navbar-brand" href="/">
                    <img class="nav__img" src="/scss/assets/img/header-logo.png" alt="logo FootballBadboys">
                </a>
            </li>
            <li class="nav__menu--item">
                <a href="{{ route('clearancesell.index') }}" class="nav__menu--link hvr-underline-from-center">
                    CLEARANCE SALE
                </a>
            </li>
            <li class="nav__menu--item ">
                <a href="{{ route('onsale.index') }}" class="nav__menu--link hvr-underline-from-center">
                    ON SALE
                </a>
            </li>


            <li class="nav__menu--item">
                <a class="navbar-brand" href="#" onclick="toggleCart()">
                    <img class=" cart__img d-lg-none" src="/scss/assets/img/cart.png" alt="">
                </a>
                <a class="navbar-brand d-none hvr-icon-up" href="#" onclick="toggleCart()">
                    <img class="nav__img hvr-icon" src="/scss/assets/img/cart.svg" alt="">
                </a>
            </li>






            <li class="nav__menu--item mobileOn">
                <div class="socmed mobileOn">
                    <div class="fb"> <img class="fb__img" src="/assets/fb.svg" alt="icon-fb"></div>
                    <div class="ig"> <img class="ig__img" src="/assets/ig.svg" alt="icon-ig"></div>
                    <div class="twitter"> <img class="twitter__img" src="/assets/twitter.svg" alt="icon-twitter"></div>
                </div>
            </li>

            <li class="mobileOn text-center">
                <span class="lg-off text-light text-muted">&copy;2020 – Footballbadboys. All rights
                    reserved.</span>
            </li>
        </ul>


    </nav>
</header>

<body>
    <main class="main">

        
        @yield('content')


        <footer class="footer">
            <div class="container-fluid">
                <div class="footer__flex">

                    <div class="footer__item">
                        <div class="footer__item--head">
                            <h3>ABOUT COMPANY</h3>
                            <hr class="footer__hr hr-1">
                        </div>

                        <div class="footer__item--body1">
                            <p>Starting from a love of foreign and domestic football this name was born when thinking about the
                    development of football therefore, badboys will never be for from the scope of foreign and
                    domestic football its own pride can give birth to you in the arena of worldy football </p>
                            <div class="social">
                                <img class="address__img" src="/assets/address.svg" alt="icon-alamat">
                                <span class="body__span">Jl Nologaten No.135, Caturtunggal,Depok Sleman, Yogyakarta 55281 Indonesia</span>
                                <br>
                                <img class="phone__img" src="/assets/telfon.svg" alt="icon-alamat">
                                <span class="body__span">+628176741908</span>
                                <br>
                                <img class="email__img" src="/assets/email.svg" alt="icon-alamat">
                                <span class="body__span">Footballbadboysyk@gmail.com </span>
                            </div>


                        </div>
                    </div>

                    <div class="footer__item">
                        <div class="footer__item--head">
                            <h3>FEATURED</h3>
                            <hr class="footer__hr hr-2">
                        </div>

                        <div class="footer__item--body2">
                            <ul class="body__ul">
                                @foreach ($categoriesfooter as $category)
                                    <li class="body__li"><a href="#={{ route('allproduct.index', ['category' => $category->id]) }}"><span class="body__span">{{ $category->name }}</span></a></li>
                                @endforeach
                            </ul>


                        </div>
                    </div>

                    <div class="footer__item">
                        <div class="footer__item--head">
                            <h3>KOLEKSI</h3>
                            <hr class="footer__hr hr-3">
                        </div>

                        <div class="footer__item--body3">
                            <ul class="body__ul">
                                @foreach ($categoriesfooter2 as $category)
                                    <li class="body__li"><a href="{{ route('allproduct.index', ['category' => $category->id]) }}"><span class="body__span">{{ $category->name }}</span> </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="footer__item">
                        <div class="footer__item--head">
                            <h3>TRACK US ON</h3>
                            <hr class="footer__hr hr-4">
                        </div>


                        <div class="footer__item--body4">
                            <div class="social">
                                <img class="fb__img" src="/assets/fb.svg" alt="icon-fb">
                                <a href="#"><span class="body__span">ballboys</span></a>
                                <br>
                                <img class="ig__img" src="/assets/ig.svg" alt="icon-ig">
                                <a href="#"><span class="body__span">@Footballbadboys </span></a>
                                <br>
                                <img class="twitter__img" src="/assets/twitter.svg" alt="icon-twitter">
                                <a href="#"><span class="body__span">@ftbadboys</span></a>
                                <br>


                                <div class="box">
                                    <span class="box__text">Bayar Dengan</span>
                                    <img class="box__img" src="/assets/visa.svg" alt="visa">
                                    <img class="box__img" src="/assets/paypal.svg" alt="paypal">
                                    <img class="box__img" src="/assets/mastercard.svg" alt="mastercard">
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="footer__item special">
                        <div class="footer__item--flex">
                            <ul class="">
                                Sitemaps </li>
                                <li>SearchUs </li>
                                <li>Advance </li>
                                <li>Contact us </li>
                                <li>Subscribe us </li>
                            </ul>
                            <div class="box2">
                                <span class="copy">2020 FootballBadboys
                                </span>
                                <span class="copy">Designed and Developed By OneCode.id
                                </span>
                                <span class="copy"> &copy All Rights Reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>

        <!-- CART SECTION -->
        <aside class="sidecart text-center">

            <ul class="flex-column">
                <div class="d-inline coba" onclick="toggleCart()">
                    <img class="cart__closeBtn float-left" src="/scss/assets/img/back.svg" alt="">
                </div>
                <div class="cart__head text-light h4 text-center">

                    <a class="navbar-brand" style="margin-right: 4rem;" href="#">
                        <img class="shake" src="/scss/assets/img/cart.svg" width="40" height="40" alt="">
                    </a>

                </div>

                <li class="d-flex flex-wrap flex-row">
                    <div class="col-12 text-dark h5 text-center p-0"><span class="status-product">
                            Hai, ini daftar belanjaan anda </span> <img class="peace__img shake"
                            src="/scss/assets/img/peace.svg" alt="">
                        <hr class="cart__hr">
                    </div>
                </li>
                <!-- tinggal matiin komentarnya -->

                @foreach (Cart::content() as $item)
                    <li class="d-flex flex-wrap flex-row">
                        <!-- product image -->
                        <div class="col-4 p-0">
                            <img class="img-fluid hvr-bounce-in" src="{{ asset('storage/products/'. json_decode($item->model->image)[0]) }}" alt="">
                        </div>
                        <!-- end product image -->

                        <!-- product props -->
                        <div class="col-8 justify-content-around d-flex flex-column">

                            <div class="items">
                                <span class="productName">{{ $item->model->name }}t</span>
                                <span class="size">Color : <span class="size__value">{{ $item->options->color }}</span> </span>
                                <span class="size">Size : <span class="size__value">{{ $item->options->size }}</span> </span>
                                <span class="total">Rp <span class="total__value"><?php if($item->model->price_discount == 0){ echo format_uang($item->subtotal); }else{echo format_uang($item->subtotal);}?></span></span>
                            </div>
                            

                        </div>

                        <!-- end product props -->
                        <hr class="li__hr">
                    </li>
                @endforeach

                
                <div class="flex-end">
                    <div class="sub">
                        <span>Sub Total</span>
                        <span>Total</span>
                    </div>
                    <div class="total__div">
                        <span class="subTotal total">Rp <span class="total__value">{{ format_uang(Cart::subtotal()) }}</span></span>
                        <span class="total">Rp <span class="total__value">{{ format_uang(Cart::total()) }}</span></span>
                    </div>
                </div>
                <div class="p-2">
                    <a href="{{ route('cart.index') }}" type="button" class="btn btn-primary btn__checkout w-50">CART</a>
                </div>
                <li>
                    <div class="iklan">
                        <a href="{{ route('allproduct.index') }}"><img class="adv__img" src="{{ asset('storage/contentpromotion/'.$contentpromotion->image1) }}" alt="advertisement image 1"></a>
                        <a href="{{ route('allproduct.index') }}"><img class="adv__img mt-2" src="{{ asset('storage/contentpromotion/'.$contentpromotion->image2) }}" alt="advertisement image 2"></a>
                    </div>
                </li>
            </ul>

        </aside>
        <!-- END CART SECTION -->
    </main>
</body>

<!-- ini udah local -->
<script src="/node_modules/swiper/js/swiper.js"></script>
<script src="/node_modules/swiper/js/swiper.min.js"></script>

<!-- JANGAN LUPA DIBUATIN OFFLINENYA DIM BIAR ENTENG DOWNLOADKE YA -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="/js/main.js"></script>
<script>

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

</html>