@extends('layout.customer')

@section('title','Checkout - FootballBadboys')

@section('content')

<div class="container">
    <section class="checkout">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Checkout</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment</li>
            </ol>
        </nav>
        <!--END Breadcrumb -->
        <h4>FORM PEMBAYARAN</h4>
        <div class="row">
            <div class="col-xl-8">
                <div class="border shadow payment__forms">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputName">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputName">
                        </div>
                        <div class="form-group">
                            <label for="noWa">No WhatsApp</label>
                            <input type="number" class="form-control" name="phone" id="noWa" aria-describedby="numberHelp" required>
                            <small id="numberHelp" class="form-text text-muted">Tuliskan dengan lengkap
                                Digunakan untuk konfirmasi pembayaran</small>
                        </div>
                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <select class="form-control" name="province" id="exampleFormControlSelect1" required>
                                <option>Jawa Tengah</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Timur</option>
                                <option>Yogyakarta</option>
                                <option>Papua</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota/Kabupaten</label>
                            <select class="form-control" name="city" id="exampleFormControlSelect1" required>
                                <option>Sleman</option>
                                <option>Kulon Progo</option>
                                <option>Gunung Kidul</option>
                                <option>Bntul</option>
                                <option>Kota</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" name="address" id="address"
                                aria-describedby="addressHelp" required></textarea>
                            <small id="addressHelp" class="form-text text-muted">Tuliskan dengan lengkap
                                digunakan sebagai pengiriman paket anda.</small>
                        </div>
                        <div class="form-group">
                            <label for="kodepos">Kode Pos</label>
                            <input type="text" class="form-control" name="kodepos" id="kodepos" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Metode Pembayaran</label>
                            <select class="form-control" name="payment_method" id="exampleFormControlSelect1">
                                <option>Transfer BCA - 012345678 a/n Adnan Aziz</option>
                                <option>Transfer BTN - 012345678 a/n Adnan Aziz</option>
                                <option>Transfer BRI - 012345678 a/n Adnan Aziz</option>
                                <option>Transfer Mandiri - 012345678 a/n Adnan Aziz</option>
                                <option>Transfer Bank DIY - 012345678 a/n Adnan Aziz</option>
                            </select>
                        </div>
                        <div class="form-group form-check ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" required>Dengan ini saya
                                menyetujui <a href="#"> syarat</a> dan <a href="#">ketentuan</a>
                                FootballBadboys</label>
                        </div>
                        {{-- <button type="button" class="btn btn-primary bg-dark w-100" data-toggle="modal"
                            data-target="#staticBackdrop">SUBMIT FORM</button> --}}
                        <button type="submit" class="btn btn-primary bg-dark w-100">SUBMIT FORM</button>
                    </form>
                </div>

                <div class="info border shadow">
                    <h4 class="col-xlor">INFORMASI</h4>
                    <ul>
                        <li>
                            <p>- Sistem pembayaran dilakukan melalui via WhatsApp
                            </p>
                        </li>
                        <li>
                            <p>-Harga tersebut belum termasuk harga ongkos kirim</p>
                        </li>
                        <li>
                            <p>- Detail ongkos kirim akan dikirim melalui via WhatsApp dan
                                dapat dicek langsung melalui website penyedia layanan jasa pengiriman
                            </p>
                        </li>
                        <li>
                            <p>- Informasi lebih lanjut hubungi <a href="#"> customer Service</a> Football
                                Badboys
                            </p>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-xl-4 ">
                <aside class="preorder border shadow">
                    <div class="preorder__first">
                        <span><span class="number__value"> 3 </span> Item</span>
                        <span><a href="{{ route('cart.index') }}">Edit</a></span>
                    </div>

                    <div class="preorder__product-preview">

                        @foreach (Cart::content() as $item)
                        <div class="row space">
                            <div class="col-xl-4 preorder__parent">
                                <img class="preorder__img" src="{{ asset('storage/products/'. json_decode($item->model->image)[0]) }}"
                                    alt="product preview image">
                            </div>
                            <div class="col-xl-8 product__text-payment">
                                <span>{{ $item->model->name }}</span>
                                <span>{{ $item->options->color }}</span>
                                <span>{{ $item->options->size }}</span>
                                <span>{{ $item->qty }}</span>
                            </div>

                        </div>
                        @endforeach

                        <div class="flex-event">
                            <div class="pricing">
                                <span>Subtotal</span>
                                <strong><span>Total</span></strong>
                            </div>

                            <div class="value__pricing">
                                <span>Rp. <span class="value">{{ Cart::subtotal() }}</span></span>
                                <strong><span>Rp. <span class="value">{{ Cart::total() }}</span></span></strong>
                            </div>
                        </div>
                    </div>


                </aside>
            </div>
        </div>
    </section>
</div>

<!-- modal 2  -->
{{-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pemberitahuan</h5>
                <!-- <img src="scss/assets/img/pardon.webp" width="30px" height="30px" alt="Sorry For Inconvinient"> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="lead">Terimakasih telah membeli catalog kami.</span><br><br>
                <span class="lead"> Harap tunggu pesan dari admin football badboys beberapa saat lagi. <br><br>
                    More
                    info
                    hubungi kami
                    <span class="text-danger"> 081229000151</span></span><br><br>
                <span class="small"><small> Hati-hati penipuan megatasnamakan FootballBadboys nomor
                        Footballbadboys
                        resmi
                        hanya pada nomor tersebut. Terimakasih</small></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Tutup</button>
            </div>
        </div>
    </div>
</div> --}}
<!-- end modal 2 -->

@endsection