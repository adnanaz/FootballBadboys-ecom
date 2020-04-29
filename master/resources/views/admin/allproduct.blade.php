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
                    <a href="../../category.html">
                        <div class="add__cat">
                        <img class="add__img mr-2" src="/scss/assets/img/admin/add.png" alt="add kategori">
                        <span class="jdl">Kategori</span>
                        </div>
                    </a>
                    <hr>
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
                                <th scope="col"> <a href="#" class="hvr-underline-from-center">All Category</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Jacket </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Jersey </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Overshirt </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Merchandise </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Polo T-shirt </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Shortpants </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> T-Shirt </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Waistbag </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Cagoule </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Caps </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Crewneck </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Half Zip </a></th>

                                </tr>
                                <tr>
                                <th scope="row"><a href="#" class="hvr-underline-from-center"> Hoodie </a></th>

                                </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>


                    <div class="sizes">
                        <span class="jdl">Size</span>
                        <hr>
                        <ul class="size__ul">
                        <li class="size__li"><button type="button" class="btn btn-outline-info">S</button>
                        </li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">XL</button>
                        </li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">XXL</button>
                        </li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">XS</button>
                        </li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">L</button>
                        </li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">M</button>
                        </li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">XXXL</button></li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">8</button>
                        </li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">10</button>
                        </li>
                        <li class="size__li"><button type="button" class="btn btn-outline-info">12</button>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>


                <div class="child2 col-10">
                    <div class="child2__item">
                    <div class="add">
                        <a href="../../add-product.html">
                        <img class="add__img" src="/scss/assets/img/admin/add.png" alt="">
                        <span data-toggle="modal" data-target="#exampleModalCenter" class="">Tambah
                            Produk</span>
                        </a>

                        <form class=" form-inline ml-3 float-right">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
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

                        <figure class="border hvr-grow-shadow">
                        <a href="#">
                            <h5>540B</h5>
                            <img src="/scss/assets/img/produknya.svg" alt="">
                            <figcaption>Jacket Man</figcaption>
                            <span class="dc">Rp. <span class="strike"> 300000</span></span>
                            <span class="price">Rp. <span>300000</span></span>
                            <div class="properti hvr-bounce-to-top">
                            <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/pencil.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/trash.png" alt="ikon lihat produk"></a>
                            </div>
                        </a>
                        </figure>
                        <figure class="border hvr-grow-shadow">
                        <a href="#">
                            <h5>540B</h5>
                            <img src="/scss/assets/img/produknya.svg" alt="">
                            <figcaption>Jacket Man</figcaption>
                            <span class="dc">Rp. <span class="strike"> 300000</span></span>
                            <span class="price">Rp. <span>300000</span></span>
                            <div class="properti hvr-bounce-to-top">
                            <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/pencil.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/trash.png" alt="ikon lihat produk"></a>
                            </div>
                        </a>
                        </figure>
                        <figure class="border hvr-grow-shadow">
                        <a href="#">
                            <h5>540B</h5>
                            <img src="/scss/assets/img/produknya.svg" alt="">
                            <figcaption>Jacket Man</figcaption>
                            <span class="dc">Rp. <span class="strike"> 300000</span></span>
                            <span class="price">Rp. <span>300000</span></span>
                            <div class="properti hvr-bounce-to-top">
                            <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/pencil.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/trash.png" alt="ikon lihat produk"></a>
                            </div>
                        </a>
                        </figure>
                        <figure class="border hvr-grow-shadow">
                        <a href="#">
                            <h5>540B</h5>
                            <img src="/scss/assets/img/produknya.svg" alt="">
                            <figcaption>Jacket Man</figcaption>
                            <span class="dc">Rp. <span class="strike"> 300000</span></span>
                            <span class="price">Rp. <span>300000</span></span>
                            <div class="properti hvr-bounce-to-top">
                            <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/pencil.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/trash.png" alt="ikon lihat produk"></a>
                            </div>
                        </a>
                        </figure>
                        <figure class="border hvr-grow-shadow">
                        <a href="#">
                            <h5>540B</h5>
                            <img src="/scss/assets/img/produknya.svg" alt="">
                            <figcaption>Jacket Man</figcaption>
                            <span class="dc">Rp. <span class="strike"> 300000</span></span>
                            <span class="price">Rp. <span>300000</span></span>
                            <div class="properti hvr-bounce-to-top">
                            <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/pencil.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/trash.png" alt="ikon lihat produk"></a>
                            </div>
                        </a>
                        </figure>
                        <figure class="border hvr-grow-shadow">
                        <a href="#">
                            <h5>540B</h5>
                            <img src="/scss/assets/img/produknya.svg" alt="">
                            <figcaption>Jacket Man</figcaption>
                            <span class="dc">Rp. <span class="strike"> 300000</span></span>
                            <span class="price">Rp. <span>300000</span></span>
                            <div class="properti hvr-bounce-to-top">
                            <a href="#" class="hvr-icon-pulse"> <img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/invisble.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/pencil.png" alt="ikon lihat produk"></a>
                            <a href="#" class="hvr-icon-pulse"><img class="hvr-icon properti__img"
                                src="/scss/assets/img/admin/trash.png" alt="ikon lihat produk"></a>
                            </div>
                        </a>
                        </figure>


                    </div>
                    </div>

                    </a>
                </div>



                </div>
            </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection